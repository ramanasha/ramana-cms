<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(ChildSeeder::class);
        $this->call(Post_tagSeeder::class);
        $this->call(Category_postSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(ChildSubjectSeeder::class);
    }
}
