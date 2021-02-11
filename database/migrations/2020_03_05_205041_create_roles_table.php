<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('roles', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('label')->nullable();
			$table->timestamps();
		});

		Schema::create('permissions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('label');
			$table->string('category')->nullable();
			$table->timestamps();
		});

		if (!Schema::hasTable('permission_role')) {
			Schema::create('permission_role', function (Blueprint $table) {
				$table->integer('permission_id')->unsigned();
				$table->integer('role_id')->unsigned();

				$table->foreign('permission_id')
					->references('id')
					->on('permissions')
					->onDelete('cascade');

				$table->foreign('role_id')
					->references('id')
					->on('roles')
					->onDelete('cascade');

				$table->primary(['permission_Id', 'role_id']);
			});
		}
		if (!Schema::hasTable('role_user')) {
			Schema::create('role_user', function (Blueprint $table) {
				$table->integer('role_id')->unsigned();
				$table->integer('user_id')->unsigned();

				$table->foreign('role_id')
					->references('id')
					->on('roles')
					->onDelete('cascade');

				$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');

				$table->primary(['role_id', 'user_id']);
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::dropIfExists('roles');
		Schema::dropIfExists('permissions');
		if (Schema::hasTable('permission_role')) {
			Schema::dropIfExists('permission_role');
		}
		if (Schema::hasTable('role_user')) {
			Schema::dropIfExists('role_user');
		}
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
}
