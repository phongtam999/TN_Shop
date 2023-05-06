<?php
namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get Model
     * @return string
     */
    abstract public function getModel();

    /**
     * set Model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function all($request)
    {
<<<<<<< HEAD
=======
        echo __METHOD__;
>>>>>>> 50a953e1f8344e957ea9488721178604080e72a5
        $result = $this->model->all();
        return $result;
    }

    public function find($id)
    {
<<<<<<< HEAD
=======
        echo __METHOD__;
>>>>>>> 50a953e1f8344e957ea9488721178604080e72a5
        return $this->model->find($id);
    }

    public function store($data)
    {
<<<<<<< HEAD
=======
        echo __METHOD__;
>>>>>>> 50a953e1f8344e957ea9488721178604080e72a5
        return $this->model->store($data);
    }

    public function update($data, $id)
    {
        return $this->model->where('id',$id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->where('id',$id)->delete();
    }
}