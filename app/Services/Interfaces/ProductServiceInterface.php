<?php
namespace App\Services\Interfaces;
/*
ServiceInterface nằm cùng cấp, ko cần use
*/
interface ProductServiceInterface extends ServiceInterface{
   public function all($request);
    public function find($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
    public function getTrashed();
    public function restore($id);
    public function deleteforever($id);
    public function search($data);
    

}