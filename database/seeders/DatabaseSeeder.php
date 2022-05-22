<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'sena pahlevi',
            'email' => 'senapahlevi1@gmail.com',
            'password'=> bcrypt('123456789')
        ]);
        User::create([
            'name' => 'xenna',
            'email' => 'xenna@gmail.com',
            'password'=> bcrypt('123456789')
        ]);
        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'UI-UX',
        ]);
        Post::create([
            'title' => 'flutter dead against react native',
            'slug' => 'flutter-dead-against-react-native',
            'excerpt' => 'flutter will dead now hahahahahahahahaahahahahhaahhaahahah',
            'body' => 'ini bodyyyyyyy',
            'category_id' => 1,
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'dortmund choreo against barca ',
            'slug' => 'dortmund-choreo-against-barca',
            'excerpt' => 'dortmund choreo against barca deaddd',
            'body' => 'ini bodyyyyyyy',
            'category_id' => 1,
            'user_id' => 1
        ]);

    }
}
