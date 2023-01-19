<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Group;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = User::get()->all();
        $userIds = User::pluck('id')->all();
        $groups = Group::get()->all();

        foreach ($groups as $group) {
            $randomUserIds = Arr::random($userIds, mt_rand(1, count($userIds)));

            foreach ($randomUserIds as $userId) {
                $groupUser[] = [
                    // 'user_id' => $user['id'],
                    'user_id' => $userId,
                    'group_id' => $group['id'],
                    'expired_at' => now()->addHours($group['expire_hours'])->addMinutes(mt_rand(1, 40))
                ];
            }
        }

        DB::table('group_user')->insert($groupUser);
    }
}
