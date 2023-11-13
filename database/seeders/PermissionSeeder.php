<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions for User management
        Permission::create(['name' => 'Create User']);
        Permission::create(['name' => 'View User']);
        Permission::create(['name' => 'Update User']);
        Permission::create(['name' => 'Delete User']);

        // Define permissions for Order management
        Permission::create(['name' => 'Create Order']);
        Permission::create(['name' => 'View Order']);
        Permission::create(['name' => 'Update Order']);
        Permission::create(['name' => 'Delete Order']);

        // Define permissions for Order management
        Permission::create(['name' => 'Create Notification']);
        Permission::create(['name' => 'View Notification']);
        Permission::create(['name' => 'Update Notification']);
        Permission::create(['name' => 'Delete Notification']);







    }
}
