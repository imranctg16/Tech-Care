<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\FollowService;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    protected $followService;

    public function __construct(FollowService $followService)
    {
        $this->followService = $followService;
    }
    
    /**
     * follow unfollow
     *
     * @param int $userId
     * @param bool $isFollow
     * @return \Illuminate\Http\JsonResponse
     */
    public function follow(int $userId, bool $isFollow)
    {
        $authUser = Auth::user();
        return $this->followService->follow($authUser->id,$userId, $isFollow);
    }
}
