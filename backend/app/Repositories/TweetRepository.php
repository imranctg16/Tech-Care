<?php
namespace App\Repositories;
use App\Models\Tweet;

class TweetRepository
{

    public function __construct()
    {

    }
    /**
     * store method 
     *
     * @param array $data
     * @return 
     */
    public function store($data)
    {
        return Tweet::create($data);
    }
}
