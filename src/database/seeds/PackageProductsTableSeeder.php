<?php

use Illuminate\Database\Seeder;

class PackageProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 1',
                'created_at' => now()
            ],

            [
               'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 2',
                'created_at' => now()
            ],

            [
                'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 3',
                'created_at' => now()
            ],

            [
                'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 4',
                'created_at' => now()
            ],

            [
                'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 5',
                'created_at' => now()
            ],

            [
                'art' => mt_rand(1000000, 1999999),
                'name' => 'Product 6',
                'created_at' => now()
            ]
        ]);
    }
}
