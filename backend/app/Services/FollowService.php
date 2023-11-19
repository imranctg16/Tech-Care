<?php
namespace App\Services;

use App\Repositories\FollowRepository;
use App\Services\ApiBaseService;
use Exception;
use Log;

class FollowService extends ApiBaseService
{
    protected $repository;
    public function __construct(FollowRepository $followUnfollowRepository)
    {
        $this->repository = $followUnfollowRepository;
    }
    /**
     * follow unfollow method 
     * @param integer $followingUserId
     * @param boolean $isFollow
     * @return \illuminate\Http\JsonResponse
     */
    public function follow(int $followerUserId, int $followingUserId, bool $isFollow = false)
    {
        try {
            if ($isFollow) {
                $this->repository->store($followerUserId, $followingUserId);
            }
            $this->repository->delete($followerUserId, $followingUserId);
            return $this->sendSuccessResponse([], 'Data Saved Successfully');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return $this->sendErrorResponse($exception->getMessage());
        }
    }
}
