<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Comment::create([
            'comment'=>'its an unforgetable memory',
            'post_id'=>'1',
            'user_id'=>'1'
        ]);
        App\Comment::create([
            'comment'=>'sad to hear the news abot covid19',
            'post_id'=>'2',
            'user_id'=>'2'
        ]);
        App\Comment::create([
            'comment'=>'nice move',
            'post_id'=>'3',
            'user_id'=>'3'
        ]);

        Factory(App\Comment::class,10)->create();
    }
}
