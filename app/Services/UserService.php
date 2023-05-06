<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;

use App\Repositories\Interfaces\PostRepositoryInterface;


class UserService implements UserServiceInterface
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /* Triển khai các phương thức trong PostServiceInterface */
    public function all($request){
        // dd(__METHOD__);
        return $this->postRepository->all($request);
    }
    public function find($id){
        return $this->postRepository->find($id);
    }
    public function store($request){
        return $this->postRepository->store($request);
    }
    public function update($request, $id){
        return $this->postRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->postRepository->destroy($id);
    }
}
