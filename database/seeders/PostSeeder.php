<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakeData=Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                "title" => $fakeData->title,
                "description" => "normal description",
                "user_id" => User::inRandomOrder()->first()->id
            ]);
        }
    }
}
