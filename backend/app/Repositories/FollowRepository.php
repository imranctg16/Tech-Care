<?php 
namespace App\Repositories;
use App\Models\FollowUnfollow;
class FollowRepository {

    public function store($followerId,$followingId){
         FollowUnfollow::create([
            'follower_user_id'=>$followerId,
            'following_user_id'=>$followingId
        ]);
    }   

    public function delete($followerId,$followingUserId){
        return FollowUnfollow::where(['follower_user_id'=>$followerId,'following_user_id'=>$followingUserId])->delete();
    }
    
}