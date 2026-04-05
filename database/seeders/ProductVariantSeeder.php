<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([

            [
                'product_id' => 1,
                'size' => '1kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'size' => '2kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'size' => '5kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'product_id' => 2,
                'size' => '1kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'size' => '2kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'size' => '5kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

