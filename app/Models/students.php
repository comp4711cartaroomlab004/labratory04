<?php

namespace App\Models;
use CodeIgniter\Model;

class Students extends Model
{
    protected $data = [
        'a00986001' => ['id' => 'a00986001', 'fullname' => 'Cassidy Banks', 'year' => 2],
        'a00986002' => ['id' => 'a00986002', 'fullname' => 'Malcolm Longboi', 'year' => 3],
        'a00986003' => ['id' => 'a00986003', 'fullname' => 'Ernie Smallman', 'year' => 1],
    ];
    public function find($id = null)
    {
        return $this->data[$id];
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}
