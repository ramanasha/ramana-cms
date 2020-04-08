<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'rammiah',
            'email'=>'rammi@gmail.com',
            'password'=>'123456789'
        ]);
        App\User::create([
            'name'=>'harrini',
            'email'=>'harrini@gmail.com',
            'password'=>'123456789'
        ]);
        App\User::create([
            'name'=>'ashwin',
            'email'=>'ashwin@gmail.com',
            'password'=>'123456789'
        ]);
    }
}
