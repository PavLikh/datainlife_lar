<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 2) as $i) {
        
            $groups[] = [
                'name' => "Группа$i",
                'expire_hours' => $i,
            ];
        }
        DB::table('groups')->insert($groups);
    }
}
