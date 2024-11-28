<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'testto123.com',
            'password' => Hash::make('1234'),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
