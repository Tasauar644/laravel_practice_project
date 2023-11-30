<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = "admin1";
        $user1->email = "admin1@gmail.com";
        $user1->password = Hash::make("123");
        $user1->save();

        $user2 = new User();
        $user2->name = "admin2";
        $user2->email = "admin2@gmail.com";
        $user2->password = Hash::make("456");
        $user2->save();
    }
}
