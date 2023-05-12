<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface CustomerServiceInterface extends ServiceInterface{
    function paginate($request);
    function all($request);
    function search($data);

}