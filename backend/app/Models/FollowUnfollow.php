<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUnfollow extends Model
{
    use HasFactory;

    protected $table = 'follows';
    protected $fillable = [
        'following_user_id',
        'follower_user_id'
    ];
}
