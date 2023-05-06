<?php
namespace App\Services\Interfaces;

interface ProductServiceInterface extends ServiceInterface{
    public function getTrashed();
    public function deleteforever($id);
    public function restore($id);
}
