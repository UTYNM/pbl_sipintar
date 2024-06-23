<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryTypes = [
            ['category_id' => 1, 'type_name' => 'Tanaman Pangan'],
            ['category_id' => 1, 'type_name' => 'Sayur - Sayuran'],
            ['category_id' => 1, 'type_name' => 'Buah - Buahan'],
            ['category_id' => 1, 'type_name' => 'Tanaman Perkebunan'],
            ['category_id' => 1, 'type_name' => 'Rempah - Rempahan'],
        ];
    }
}
