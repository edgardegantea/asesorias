<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // CREACIÓN DE PERMISOS
        // crear permisos para módulo de usuarios
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        // crear permisos para módulo de roles
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        // crear permisos para módulo de permisos
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'student']);
        $role1->givePermissionTo('read users');
        $role1->givePermissionTo('read permissions');
        $role1->givePermissionTo('read roles');

        $role2 = Role::create(['name' => 'teacher']);
        // Permisos del módulo de usuarios
        $role2->givePermissionTo('create user');
        $role2->givePermissionTo('read users');
        $role2->givePermissionTo('update user');
        $role2->givePermissionTo('delete user');
        // Permisos del módulo de roles
        $role2->givePermissionTo('read permissions');
        $role2->givePermissionTo('update permission');
        // Permisos del módulo de permisos
        $role2->givePermissionTo('read roles');
        $role2->givePermissionTo('update role');


        $role3 = Role::create(['name' => 'admin']);
        $role3->givePermissionTo(Permission::all());

        $role4 = Role::create(['name' => 'root']);
        $role4->givePermissionTo(Permission::all());
        // gets all permissions via Gate::before rule; see AuthServiceProvider




        /*
        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
        */
    }
}
