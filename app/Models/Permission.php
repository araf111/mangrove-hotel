<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {
	/**
	 * A permission can be applied to roles.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function roles() {
		return $this->belongsToMany(Role::class);
	}


	/**
     * Get the current cached permissions.
     */
    protected static function getPermissions(array $params = []): Collection
    {
        return app(PermissionRegistrar::class)
            ->setPermissionClass(static::class)
            ->getPermissions($params);
	}
	
	/**
	 * Sync Users permission.
	 *
	 * @param  Permission $permission
	 * @return boolean
	 */
	/*
	public function syncPermissions(Permission $permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionTo($permissions);
	}
	*/
}
