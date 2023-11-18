<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\TweetService;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    protected $service;
    public function __construct(TweetService $tweetService)
    {
        $this->service = $tweetService;
    }

    public function index()
    {

    }
    public function store(Request $request)
    {
        return $this->service->store($request->all());
    }
}
