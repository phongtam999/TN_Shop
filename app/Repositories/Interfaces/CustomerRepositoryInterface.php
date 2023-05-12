<?php
namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface CustomerRepositoryInterface extends RepositoryInterface{
    function paginate($request);
    function all($request);
    function search($data);
    
}