<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface CustomerServiceInterface extends ServiceInterface{
    // public function create($data);
    public function search($request);
    public function paginate($request);

}