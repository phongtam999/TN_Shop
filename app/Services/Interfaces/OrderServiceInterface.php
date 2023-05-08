<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface OrderServiceInterface extends ServiceInterface{
    // public function create($data);
    function paginate($request);
    function search($data);

}