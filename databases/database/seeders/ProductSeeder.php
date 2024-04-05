<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        // count es para crear el numero de productos, en este caso son 150 productos
        Product::factory()->count(150)->create();
    }
}
