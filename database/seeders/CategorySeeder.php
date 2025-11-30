<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
            ],
            [
                'name' => 'Fashion',
            ],
            [
                'name' => 'Home & Kitchen',
            ],
            [
                'name' => 'Gaming',
            ],
            [
                'name' => 'Beauty',
            ],
        ];
        Category::insert($categories);
    }
}
