<?php

namespace App\Repositories\Interfaces;

interface GroupRepositoryInterface extends RepositoryInterface {
    function paginate($request);
    // public function delete($id);
    public function detail($id);
    // public function store($request);
    public function group_detail($id, $request);
}
