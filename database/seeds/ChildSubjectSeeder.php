<?php

use Illuminate\Database\Seeder;

class ChildSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Child_subject::class,25)->create();
    }
}
