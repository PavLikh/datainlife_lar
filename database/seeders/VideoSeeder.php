<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $videos = [];
        foreach (range(1, 3) as $i) {

            $videos[] = [
                'title' => "Video $i",
                'channel_id' => $i,
            ];
        }
        DB::table('videos')->insert($videos);
    }
}
