<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //Create Admin
         $admin = User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $admin->assignRole($role);

         //Create user
        $user = User::factory()->create([
            'first_name' => 'User',
            'last_name' => 'User',
            'email' => 'user@example.com',
        ]);

    }
}
