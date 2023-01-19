<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\Channel;

class UserController extends Controller
{
    public function index() {

        // $channel = Channel::find(1);
        // $user = $channel->user;
        // $a = Group::pluck(['id', 'expire_hours'])->all();
        $currentTime = date("H", time());
        echo 'time: '. time();
        echo '<br>';
        echo 'date: '. date("H");
        echo '<br>';
        echo 'date+1:'. date('H:i:s', strtotime('5 hours'));
        echo '<br>';
        // echo now()->addMinutes(200);
        echo now()->addHours(2);
        echo '<br>';



        $a = Group::get()->all();

        dd($a);
        // return $user;
        return User::with('channel')->get();// другой способо в модели User
        // return User::get();// другой способо в модели User

    }

    public function show(User $user) {
        
        return $user->load('channel');
    
    }
}
