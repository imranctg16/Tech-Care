<?php
namespace App\Services;

use App\Repositories\LikeRepository;
use App\Services\ApiBaseService;
use Exception;
use Log;

class LikeService extends ApiBaseService
{
    protected $repository;
    public function __construct(LikeRepository $likeRepository)
    {
        $this->repository = $likeRepository;
    }
    public function store(array $data)
    {
        try {
            $like = $this->repository->store($data);
            return $this->sendSuccessResponse($like, 'Data Saved Successfully!');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return $this->sendErrorResponse($exception->getMessage());
        }
    }
}
