<?php
namespace App\Repositories;
use App\Models\Like;

class LikeRepository {
    public function __construct(){

    }

    public function store(array $data){
       return Like::create($data);
    }
}
