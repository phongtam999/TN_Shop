<?php
namespace App\Repositories\Interfaces;

interface RepositoryInterface {
    public function all($request);
    public function find($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
<<<<<<< HEAD
}
=======
}
>>>>>>> 50a953e1f8344e957ea9488721178604080e72a5
