<?php

namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface ProductRepositoryInterface extends RepositoryInterface
{
    function getTrash();
    function restore($id);
    function deleteforever($id);
    function show($id);
    public function store($data);
}
