<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupUser;

class UserController extends Controller
{
    public function index() {

        $userId = User::inRandomOrder()->pluck('id')->first();
        $groupId = Group::inRandomOrder()->pluck('id')->first();

        $grUser = new GroupUser;
        $grUser->user_id = $userId;
        $grUser->group_id = $groupId;

        try {
            $grUser->save();
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                dd('Duplicate Entry');
            }
        }
        return User::with('groups')->get();
    }

    public function show(User $user) {
        
        return $user->load('groups');
    
    }
}
