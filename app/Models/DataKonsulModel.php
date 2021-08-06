<?php namespace App\Models;

use CodeIgniter\Model;

class DatakonsulModel extends Model
{
	 protected $table = 'datakonsul';
	 protected $allowedFields = ['nim', 'nama'];
	 public function getDatakonsul($nama=false){
	 	if ($nama==false) {
	 		return $this->findAll();
	 	}
	 	return $this->where(['nama' => $nama])->first();
	 }
}