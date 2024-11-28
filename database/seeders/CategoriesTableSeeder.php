<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('categories')->insert([
            [
                'name' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
