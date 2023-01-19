<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function channel() {
        return $this->belongsTo(Channel::class);
        // return $this->belongsTo(Channel::class, 'channel_id', 'id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
