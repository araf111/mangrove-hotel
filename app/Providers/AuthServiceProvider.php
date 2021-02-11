<?php

namespace App\Providers;

use App\Models\Permission;
use Auth;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		// 'App\Model' => 'App\Policies\ModelPolicy',
	];

	/**
	 * Register any authentication / authorization services.
	 *
	 * @return void
	 */
	public function boot(GateContract $gate) {

		$this->registerPolicies($gate);

		//If only Admin request present
		if ($this->app->request->is('admin/*')) {

			$gate->before(function ($user, $ability) {
				if ($user->hasRole('superAdmin')) {
					return true;
				}
			});

			// Dynamically register permissions with Laravel's Gate.
			foreach ($this->getPermissions() as $permission) {
				$gate->define($permission->name, function ($user) use ($permission) {
					return $user->hasPermission($permission);
				});
			}
		}
	}
	/**
	 * Fetch the collection of site permissions.
	 *
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	protected function getPermissions() {
		return Permission::with('roles')->get();
	}
}
