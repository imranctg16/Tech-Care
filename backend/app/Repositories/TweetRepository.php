<?php
namespace App\Models;

class TweetRepository
{

    public function __construct()
    {

    }
    /**
     * store method 
     *
     * @param array $data
     * @return model
     */
    public function store($data)
    {
        return Tweet::create($data);
    }
}
