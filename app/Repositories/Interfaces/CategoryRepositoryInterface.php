<?php 
namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface CategoryRepositoryInterface extends RepositoryInterface{
    // public function getTrashed();
    public function deleteforever($id);
    public function restore($id);
    function search($data);
}