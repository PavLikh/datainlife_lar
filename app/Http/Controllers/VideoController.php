<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        
        return Video::with('channel', 'categories')->get();
        // return Video::get();
    }

// $video = Video::first();
// $channel = $video->channel;

    public function show(Video $video) {
        
        return $video->load('channel', 'categories');
        // return $video;
    }
}
