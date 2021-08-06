<?php namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
	protected $table = 'sekolah';
	// protected $useTimestamps = true;
	protected $allowedFields = ['Nama', 'NPSN', 'NSS', 'Akreditasi', 'Alamat', 'Telepon', 'Email'];


	public function getSekolah($id = false)
	{
		if($id == false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}

}