<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Enums\UserGender;
use App\Enums\UserStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'Admin']);
        $role_writer = Role::create(['name' => 'Writer']);
        $role_moderator = Role::create(['name' => 'Moderator']);
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
    }
}
