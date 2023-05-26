<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('12345'),
            'admin' => 1]
        ];

        DB::table('users')->insert($users);
    }
}
