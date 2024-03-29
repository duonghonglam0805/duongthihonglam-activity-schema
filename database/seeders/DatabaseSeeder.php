<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ProductsFactory;
use Illuminate\Database\Seeder;
use App\Models\Products;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(ProductsTableSeeder::class);
        Products::factory(50)->create(); //products là tên model
    }
}