<?php

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
        App\Category::create([
            'category_name'=>'Sports'
        ]);
        App\Category::create([
            'category_name'=>'Medical'
        ]);
        App\Category::create([
            'category_name'=>'Politics'
        ]);

        Factory(App\Category::class,10)->create();
    }
}
