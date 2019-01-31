<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controllers;
use App\Models\classes;

class ClassContoller extends Controller{

    use ResponseTrait;

    public function show($id){
        $model = new classes();
        $class = $model->find($id);
        return $this->respond($class, 200, 'Object found(Class)');
    }

    public function index(){
        $model = new classes();
        $class = $model->findall();
        return $this->respond($class, 200, 'Object found(Class)');
    }

    public function new(){
        $this -> fail(["Not used"],418);
    }
}