<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface OrderServiceInterface extends ServiceInterface{
    function all($request);
    function find($id);

}