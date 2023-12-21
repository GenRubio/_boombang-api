<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('api_users')->insert([
            'id' => 1,
            'web_socket_id' => '1',
            'username' => 'admin',
            'email' => 'root@root.com',
            'password' => Hash::make('root'),
            'content' => 'admin',
        ]);
    }
}
