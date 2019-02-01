<?php

namespace App\Models;
use CodeIgniter\Model;

class Classes extends Model
{
    protected $data = [
        '1337' => ['id' => '1337', 'name' => 'Database', 'level' => 2],
        '1338' => ['id' => '1338', 'name' => 'C++', 'level' => 1],
        '1339' => ['id' => '1339', 'name' => 'Advanced Wingdings', 'level' => 1],
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
