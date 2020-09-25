<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        //User::factory(5)->create();
        Category::factory()
            ->count(3)
            ->has(Post::factory()->count(8))
            ->create();
        Post::factory()
            ->count(15)
            ->forAuthor()
            ->for(Category::factory())
            ->create();
    }
}
