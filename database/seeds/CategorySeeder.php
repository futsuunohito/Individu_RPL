<?php

use Illuminate\Database\Seeder;
use App\Category;

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
            'name' => 'Horror',
            'slug' => str_slug('Horror')
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => str_slug('Romance')
        ]);
    }
}
