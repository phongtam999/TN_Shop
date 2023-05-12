<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function deleteforever($id);
    public function restore($id);
    public function search($data);
}
