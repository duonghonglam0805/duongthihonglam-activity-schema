<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'pen', 'price'=>100, 'description'=>'good'],
            ['name'=>'pen', 'price'=>100, 'description'=>'good'],
            ['name'=>'pen', 'price'=>100, 'description'=>'good'],
            ['name'=>'pen', 'price'=>100, 'description'=>'good'],
            ['name'=>'pen', 'price'=>100, 'description'=>'good'],
        ]);
    }
}