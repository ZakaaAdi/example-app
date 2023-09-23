<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Glade Air Freshener 225 ML',       
            'detail' => 'Pewangi Ruangan - Glade Air Freshener 225 ML'       
         ]);
        Product::create([
            'name' => 'Aqua 350 ML',       
            'detail' => 'Air Mineral - Aqua 350 ML',              
         ]);
    }
}
