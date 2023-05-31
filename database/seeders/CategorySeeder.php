<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $categories = ['Frontend', 'Backend', 'Guida', 'Tutorial', 'Sicurezza'];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name= $category;
            $newCategory->slug= Str::slug($category, '-');
            $newCategory->save();

        }
    }
}
