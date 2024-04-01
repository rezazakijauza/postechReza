<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    private $product_types = [
        ["mainan", "Mainan"],
        ["baju", "Baju"],           
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->product_types as $product_type) {
            \App\Models\ProductType::create([
                // "guid" => $role[0],
                "product_nametype" => $product_type[1],
            ]);
        }
    }
}