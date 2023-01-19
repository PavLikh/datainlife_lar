<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    public function index() {
        
        // return Channel::with(['user', 'videos'])->get(); // videos метод из модели Channel, добавит все связанные видео к каналам
        return Channel::with('user', 'videos')->get(); // можно массивом и не массивом
        // return Channel::get();
    }

    public function show(Channel $channel) {
        
        return $channel->load(['user', 'videos']); // videos метод из модели Channel, добавит все связанные видео к данному каналу
        // return $channel;

        // return Category::find([1, 2]);
    
    }
}
