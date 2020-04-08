<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
            'tag_name'=>'srilanka'
        ]);
        App\Tag::create([
            'tag_name'=>'sports'
        ]);
        App\Tag::create([
            'tag_name'=>'politics'
        ]);
        App\Tag::create([
            'tag_name'=>'medical'
        ]);

        Factory(App\Tag::class,10)->create();
    }
}
