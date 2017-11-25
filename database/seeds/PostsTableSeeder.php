<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(blog\Posts::class, 20)->create();

        factory(blog\Tags::class, 20)->create();
    }
}
