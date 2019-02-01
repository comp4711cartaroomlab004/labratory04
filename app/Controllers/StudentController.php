<?php

namespace App\Controllers;

use App\Models\students;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class StudentContoller extends Controller
{

    use ResponseTrait;

    public function show($id)
    {
        $model = new students();
        $student = $model->find($id);
        return $this->respond($student, 200, 'Object found(Student)');
    }

    public function index()
    {
        $model = new students();
        $student = $model->findall();
        return $this->respond($student, 200, 'Object found(Student)');
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
