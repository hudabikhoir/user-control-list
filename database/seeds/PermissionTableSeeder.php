<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'biodata-list',
           'biodata-create',
           'biodata-edit',
           'biodata-delete',
           'status-list',
           'status-create',
           'status-edit',
           'status-delete',
           'chronologies-list',
           'chronologies-create',
           'chronologies-edit',
           'chronologies-delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}