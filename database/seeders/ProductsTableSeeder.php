<?php

namespace Database\Seeders;

use Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('products')->insert([
            [
            'name' => 'Product A',
            'price' => 100,
            'stock' => 10,
            'category_id' => 1,
            'brand_id' => 2,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product B',
            'price' => 100,
            'stock' => 10,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product C',
            'price' => 100,
            'stock' => 10,
            'category_id' => 3,
            'brand_id' => 3,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product D',
            'price' => 100,
            'stock' => 10,
            'category_id' => 4,
            'brand_id' => 4,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product E',
            'price' => 100,
            'stock' => 10,
            'category_id' => 5,
            'brand_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product F',
            'price' => 190000,
            'stock' => 20,
            'category_id' => 5,
            'brand_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product G',
            'price' => 10880,
            'stock' => 10,
            'category_id' => 5,
            'brand_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product H',
            'price' => 109090,
            'stock' => 10,
            'category_id' => 5,
            'brand_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
            ],
            [
            'name' => 'Product I',
            'price' => 1120000,
            'stock' => 10,
            'category_id' => 5,
            'brand_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
            ]
        ]);

        // DB::table('products')->insert([
        //     'name' => 'Product B',
        //     'price' => 200,
        //     'stock' => 20,
        //     'created_at' => $now,
        //     'updated_at' => $now
        // ]);

        // $faker = Faker::create('id_ID');

        // for($i=1; $i<=40; $i++){
        //     DB::table('products')->insert([
        //         'name' => $faker->name,
        //         'price' => $faker->numberBetween(100, 1000),
        //         'stock' => $faker->numberBetween(1, 100)
        //     ]);
        // }

        
    }
}
