<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            0 => [
                'product_id' => 1,
                'category_id' => 2
            ],
            1 => [
                'product_id' => 2,
                'category_id' => 7,
            ],
            2 => [
                'product_id' => 2,
                'category_id' => 10,
            ],
            3 => [
                'product_id' => 3,
                'category_id' => 4,
            ],
            4 => [
                'product_id' => 4,
                'category_id' => 4,
            ],
            5 => [
                'product_id' => 5,
                'category_id' => 5
            ],
            6 => [
                'product_id' => 6,
                'category_id' => 5
            ],
            7 => [
                'product_id' => 7,
                'category_id' => 6
            ],
            8 => [
                'product_id' => 8,
                'category_id' => 5
            ],
            9 => [
                'product_id' => 9,
                'category_id' => 5
            ],
            10 => [
                'product_id' => 10,
                'category_id' => 2
            ],
        ]);
    }
}
