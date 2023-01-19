<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\User;
use App\Models\GroupUser;
// use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        
        // $group = new Group();
        // $user = User::inRandomOrder()->first();
        $userId = User::inRandomOrder()->pluck('id')->first();
        $groupId = Group::inRandomOrder()->pluck('id')->first();

    
        // $group = Group::where('id', 2)->first();
        // $group = Group::inRandomOrder()->first();
        
        // $index = rand(1, 1000);
        // $name = 'Name'.$index;
        
        // DB::table('group_user')->insert($channels);
        // DB::table('group_user')->create(
            // GroupUser::create(
                //     [
                    //         'user_id' => $userId,
                    //         'group_id' => $group['id'],
                    //         'expired_at' => now()->addHours($group['expire_hours'])
                    //     ]
                    // );
                    
                    $grUser = new GroupUser;
                    $grUser->user_id = $userId;
                    $grUser->group_id = $groupId;
                    // $grUser->expired_at = now();
                    // dd($grUser);
        // $grUser->group_id = $group['id'];
        // $grUser->expired_at = now()->addHours($group['expire_hours']);
        // $grUser->save();
        try {
            // DB::table('users')->insert($userData);  
            $grUser->save();
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                dd('Duplicate Entry');
            }
        }

// Category::create([
//     'name' => 'Name'.$index
// ]);


        // return Category::with('videos')->get();
        
        return "asd";
        
        
        return Category::with('videos')->get();


        // return Category::all(); //get() same

        // return DB::table('categories')->get();

        // return [
        //     'All',
        //     "Trucks",
        //     'Tools'
        // ];
    }

    public function show(Category $category) {
        
        return $category->load('videos');

        // return Category::find([1, 2]);
    
    }
}
