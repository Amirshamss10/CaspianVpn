<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            "ماهانه",  
            "دو ماهه"
        );

        foreach($categories AS $categoryName) 
        {
            Category::create([
                "title" => $categoryName
            ]);
        }
    }
}
