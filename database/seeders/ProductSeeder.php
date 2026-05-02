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
        $dogFood = DB::table('products')->where('name', 'Croquetas Premium Perro')->first();
        $catFood = DB::table('products')->where('name', 'Croquetas Premium Gato')->first();

        if ($dogFood) {
            DB::table('product_variants')->insert([
                [
                    'product_id' => $dogFood->id,
                    'label' => '1 kg',
                    'price' => 129700,
                    'stock' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'product_id' => $dogFood->id,
                    'label' => '3 kg',
                    'price' => 249700,
                    'stock' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'product_id' => $dogFood->id,
                    'label' => '6 kg',
                    'price' => 429700,
                    'stock' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        if ($catFood) {
            DB::table('product_variants')->insert([
                [
                    'product_id' => $catFood->id,
                    'label' => '1 kg',
                    'price' => 117900,
                    'stock' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'product_id' => $catFood->id,
                    'label' => '3 kg',
                    'price' => 229900,
                    'stock' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'product_id' => $catFood->id,
                    'label' => '6 kg',
                    'price' => 399900,
                    'stock' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
