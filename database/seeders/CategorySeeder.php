<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rowsCount = 1000;
        $categoriesData = [];
        for($i = 0; $i < $rowsCount; $i++) {
            $categoriesData[] = [
                'name' => "Category $i",
                'description' => Str::random(50)
            ];
        }

        DB::table('categories')->insert($categoriesData);
    }
}
