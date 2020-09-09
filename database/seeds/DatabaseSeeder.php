<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'Admin test',
            'username' => 'Admin',
            'role' => 2,
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'fullname' => 'User tester',
            'username' => 'user',
            'role' => 1,
            'email' => 'user@test.com',
            'password' => Hash::make('user'),
        ]);
    }
}
