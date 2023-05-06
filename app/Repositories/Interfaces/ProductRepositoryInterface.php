<?php

namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface ProductRepositoryInterface extends RepositoryInterface
{
    public function deleteforever($id);
    public function restore($id);
}
