<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Movie;
use App\User;
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
        // $this->call(UserSeeder::class);
	    factory(User::class,10)->create();
	    factory(Category::class,4)->create();
	    factory(Movie::class,50)->create()->each(function ($movie){
	    	return $movie->comments()->save(factory(Comment::class)->make());
	    });
    }
}
