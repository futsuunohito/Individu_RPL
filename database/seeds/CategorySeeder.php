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
            'name' => 'Coding',
            'slug' => str_slug('Coding')
        ]);
        Category::create([
            'name' => 'College',
            'slug' => str_slug('College')
        ]);
        Category::create([
            'name' => 'Comedy and Jokes',
            'slug' => str_slug('Comedy and Jokes')
        ]);
        Category::create([
            'name' => 'Course',
            'slug' => str_slug('Course')
        ]);
        Category::create([
            'name' => 'Games',
            'slug' => str_slug('Games')
        ]);
        Category::create([
            'name' => 'Movies',
            'slug' => str_slug('Movies')
        ]);
        Category::create([
            'name' => 'ILKOMERZ53',
            'slug' => str_slug('ILKOMERZ53')
        ]);
        Category::create([
            'name' => 'Important Info',
            'slug' => str_slug('Important Info')
        ]);
        Category::create([
            'name' => 'PC, Laptops, etc.',
            'slug' => str_slug('PC, Laptops, etc.')
        ]);
        Category::create([
            'name' => 'Politics',
            'slug' => str_slug('Politics')
        ]);
        Category::create([
            'name' => 'Trivial',
            'slug' => str_slug('Trivial')
        ]);
        Category::create([
            'name' => 'Other',
            'slug' => str_slug('Other')
        ]);
    }
}
