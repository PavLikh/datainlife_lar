<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory;

    protected $table = 'group_user';
    // protected $fillable = ['user_id', 'expired_at'];
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    public $timestamps = false;
}
