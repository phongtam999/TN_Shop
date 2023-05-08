<?php
namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all($request)
    {
        return $this->userRepository->all($request);
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function store($request)
    {
        return $this->userRepository->store($request);
    }

    public function update($request, $id)
    {
        return $this->userRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->userRepository->destroy($id);
    }
}
