<?php
namespace App\Models;

use App\Services\ApiBaseService;
use Exception;
use Log;

class TweetService extends ApiBaseService
{

    protected $repository;
    public function __construct(TweetRepository $tweetRepository)
    {
        $this->repository = $tweetRepository;
    }
    /**
     * store method
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(array $data)
    {
        try {
            $tweet = $this->repository->store($data);
            return $this->sendSuccessResponse($tweet, 'Acl Scenario Saved Successfully!');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return $this->sendErrorResponse($exception->getMessage());
        }
    }

    public function index()
    {

    }
}
