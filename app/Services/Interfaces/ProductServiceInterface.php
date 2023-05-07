<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface ProductServiceInterface extends ServiceInterface{
    public function getTrashed();
    public function deleteforever($id);
    public function restore($id);

}