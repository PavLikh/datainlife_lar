<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $i) {
        
            $channels[] = [
                'name' => "Channel $i",
                'user_id' => $i,
            ];
        }
        DB::table('channels')->insert($channels);
    }
}
