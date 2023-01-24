<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'CategoryName' => 'Food & Beverage',
        ]);
        Category::create([
            'CategoryName' => 'Fashions & Accessories',
        ]);
        Category::create([
            'CategoryName' => 'Home Decor & Craft',
        ]);
    }
}
