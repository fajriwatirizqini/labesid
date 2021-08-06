<?php namespace App\Models;

use CodeIgniter\Model;

class PerusahaanAdmin_Model extends Model
{
	protected $table = 'dataperusahaan';
	protected $useTimestamps = true;
	protected $allowedFields = ['Logo', 'Nama', 'Kode', 'Alamat', 'Email', 'Telepon', 'Situs', 'Lowongan'];


	public function getPerusahaan($id = false)
	{
		if ($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}