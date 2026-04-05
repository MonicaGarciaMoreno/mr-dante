<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            // ALIMENTOS
            [
                'name' => 'Croquetas Premium Perro',
                'description' => 'Alimento balanceado para perros',
                'category_id' => 1,
                'pet_type' => 'dog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Croquetas Premium Gato',
                'description' => 'Alimento balanceado para gatos',
                'category_id' => 1,
                'pet_type' => 'cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ASEO
            [
                'name' => 'Shampoo Antipulgas',
                'description' => 'Shampoo especial para mascotas',
                'category_id' => 2,
                'pet_type' => 'dog',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ACCESORIOS
            [
                'name' => 'Correa de Nylon',
                'description' => 'Correa resistente para perros',
                'category_id' => 3,
                'pet_type' => 'dog',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // MEDICINA
            [
                'name' => 'Antipulgas para Gato',
                'description' => 'Tratamiento antipulgas para gatos',
                'category_id' => 4,
                'pet_type' => 'cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

