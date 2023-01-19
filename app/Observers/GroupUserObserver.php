<?php

namespace App\Observers;

use App\Models\GroupUser;
use App\Models\Group;

class GroupUserObserver
{
    /**
     * Handle the GroupUser "created" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    // public function created(GroupUser $groupUser)
    public function creating(GroupUser $groupUser)
    {
        $group = Group::where('id', $groupUser['group_id'])->first();
        // $groupUser->expired_at = $group->expire_hours;
        // $groupUser->expired_at = now()->addHours($group->expire_hours);
        
        // GroupUser
        echo 'Created GrUsOb1<br>';
        echo 'now: '.now().'<br>';
        echo 'now+: '.now()->addHours($group->expire_hours).'<br>';
        
        echo $groupUser['user_id']; echo '<br>';
        
        echo $groupUser['group_id']; echo '<br>';
        // ['expire_hours']
        
        
        // $groupUser->save();
        // dd($groupUser);
        
        // $groupUser->setAttribute('expired_at', now()->addHours($group->expire_hours))->save();
        $groupUser->expired_at = now()->addHours($group->expire_hours);
        
        echo $groupUser['expired_at'];
        // $groupUser->save();
        // $groupUser->create(
        //         [
        //             'expired_at' => now()->addHours($group->expire_hours)
        //         ]
        //     );
        //     $groupUser->save();

        // dd($groupUser);
    }

    /**
     * Handle the GroupUser "updated" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function updated(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "deleted" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function deleted(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "restored" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function restored(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "force deleted" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function forceDeleted(GroupUser $groupUser)
    {
        //
    }
}
