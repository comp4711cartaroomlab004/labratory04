<?php
use CodeIgniter\Model;

class students extends Model
{ 

$data = [
'Cassidy' => ['id'=>'a00986001', 'fullname' => 'Cassidy Banks', 'year'=> 2],
'Malcolm' => ['id'=>'a00986002', 'fullname' => 'Malcolm Longboi', 'year'=> 3],
'Ernie' => ['id'=>'a00986003', 'fullname' => 'Ernie Smallman', 'year'=>1]
];



public findid($id=null){
return $this->data[$id];
}

public findall(int $limit = 0, int $offset = 0){
	return$this->data;
}

}