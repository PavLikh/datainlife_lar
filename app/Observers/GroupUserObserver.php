<?php

namespace App\Observers;

use App\Models\GroupUser;
use App\Models\Group;

class GroupUserObserver
{
    public function creating(GroupUser $groupUser)
    {
        $group = Group::where('id', $groupUser['group_id'])->first();
        
        $groupUser->expired_at = now()->addHours($group->expire_hours);
    }
}
