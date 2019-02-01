<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use App\Models\Classes;

class ClassController extends Controller{

    use ResponseTrait;

    public function show($id){
        $model = new Classes();
        $class = $model->find($id);
        return $this->respond($class, 200, 'Object found(Class)');
    }

    public function index(){
        $model = new Classes();
        $class = $model->findall();
        return $this->respond($class, 200, 'Object found(Class)');
    }

    function new() {
        $this->fail(["Not used"], 418);
    }

    function edit() {
        $this->fail(["Not used"], 418);
    }

    function create() {
        $this->fail(["Not used"], 418);
    }

    function update() {
        $this->fail(["Not used"], 418);
    }

    function delete() {
        $this->fail(["Not used"], 418);
    }
}
