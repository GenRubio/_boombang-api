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
            [
                'id' => 1,
                'username' => 'user1',
                'email' => 'user1@root.com',
                'password' => Hash::make('user1'),
                'content' => json_encode([
                    'avatar_id' => 1,
                    'avatar_color' => '64060E000000F6FAFFF6FAFFF6FAFFFFFFFFF6FAFF'
                ]),
            ],
            [
                'id' => 2,
                'username' => 'user2',
                'email' => 'user2@root.com',
                'password' => Hash::make('user2'),
                'content' => json_encode([
                    'avatar_id' => 2,
                    'avatar_color' => '64060E000000F6FAFFF6FAFFF6FAFFFFFFFFF6FAFF',
                    'gold_coins' => 100,
                    'silver_coins' => 100,
                    'is_admin' => true,
                    'has_costume_wolf' => false,
                    'has_costume_zombie' => false,
                    'has_costume_skeleton' => false,
                    'has_hat_panda' => false,
                    'has_hat_bull' => false,
                    'has_hat_poop' => false,
                    'has_hat_frog' => false,
                    'has_hat_rabbit' => false,
                ]),
            ],
            [
                'id' => 3,
                'username' => 'user3',
                'email' => 'user3@root.com',
                'password' => Hash::make('user3'),
                'content' => json_encode([
                    'avatar_id' => 3,
                    'avatar_color' => '64060E000000F6FAFFF6FAFFF6FAFFFFFFFFF6FAFF'
                ]),
            ],
        ]);
    }
}
