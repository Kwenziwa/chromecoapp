<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Enums\UserGender;
use App\Enums\UserStatus;
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
        $role_admin = Role::create(['name' => 'Admin']);
        $role_writer = Role::create(['name' => 'Writer']);
        $role_moderator = Role::create(['name' => 'Moderator']);
        $role_user = Role::create(['name' => 'User']);
        //Create Admin
        $admin = User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
            'status'=> UserStatus::ACTIVE,
            'gender' => UserGender::OTHER,
        ]);
        $admin->assignRole($role_admin);
        //Create Writer
        $writer = User::factory()->create([
            'first_name' => 'Writer',
            'last_name' => 'Writer',
            'email' => 'writer@example.com',
            'status'=> UserStatus::ACTIVE,
            'gender' => UserGender::OTHER,
        ]);
        $writer->assignRole($role_writer);

        //Create Moderator
        $moderator = User::factory()->create([
            'first_name' => 'Moderator',
            'last_name' => 'Moderator',
            'email' => 'moderator@example.com',
            'status'=> UserStatus::ACTIVE,
            'gender' => UserGender::OTHER,
        ]);
        $moderator->assignRole($role_moderator);

        //Create User
        $user = User::factory()->create([
            'first_name' => 'User',
            'last_name' => 'User',
            'email' => 'user@example.com',
            'status'=> UserStatus::ACTIVE,
            'gender' => UserGender::OTHER,
        ]);
        $user->assignRole($role_user);
    }
}
