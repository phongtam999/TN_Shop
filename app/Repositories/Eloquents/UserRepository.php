<?php
namespace App\Services;
use App\Services\Interfaces\UserServiceinterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
class UserService implements UserServiceinterface
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /* Triển khai các phương thức trong PostServiceInterface */
    public function all($request){
        return $this->userRepository->all($request);
    }
    public function find($id){
        return $this->userRepository->find($id);
    }
    public function store($request){
        return $this->userRepository->store($request);
    }
    public function update($request, $id){
        return $this->userRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->userRepository->destroy($id);
    }
}