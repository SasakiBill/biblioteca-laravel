<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit_books']);
        Permission::create(['name' => 'delete_books']);
        Permission::create(['name' => 'add_books']);

        $roleUser = Role::create(['name' => 'student']);

        $roleAdmin = Role::create(['name' => 'super-admin']);
    }
}
