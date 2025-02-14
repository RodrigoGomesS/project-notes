<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'user1@yahoo.com',
                'password' => bcrypt('1234abcd'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'user2@yahoo.com',
                'password' => bcrypt('1234abcd'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'user3@yahoo.com',
                'password' => bcrypt('1234abcd'),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ],);
    }
}
