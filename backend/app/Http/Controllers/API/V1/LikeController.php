<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\LikeService;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    protected $service;

    public function __construct(LikeService $likeService)
    {
        $this->service = $likeService;
    }
    public function store(Request $request)
    {
        return $this->service->store($request->all());
    }
}
