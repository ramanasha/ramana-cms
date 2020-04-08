<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            'title'=>'India lift the world cup',
            'description'=>'Dhoni finishes off in style; a magnificent strike into the crowd,India lifts the world cup after 28 years',
            'user_id'=>'1'
        ]);
        App\Post::create([
            'title'=>'Coronavirus pandemic: Tracking the global outbreak',
            'description'=>'The United States has more confirmed cases than any other single country and more than half of all the cases have been in Europe, with Italy and Spain worst affected',
            'user_id'=>'2'
        ]);
        App\Post::create([
            'title'=>'President makes a statement on fake news in social media',
            'description'=>'President Gotabhaya Rajapaksa says it has been observed that during the current state of emergency in the country',
            'user_id'=>'3'
        ]);

        Factory(App\Post::class,10)->create();
    }
}
