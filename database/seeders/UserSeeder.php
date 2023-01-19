<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();


        // $users = [];
        // foreach (range(1, 3) as $i) {
        //     $users[] = [
        //         'name' => "User $i",
        //         'email' => "user$i@mail.ru",
        //         'password' => "password$i"
        //     ];
        // }

        // DB::table('users')->insert($users);
    }
}
