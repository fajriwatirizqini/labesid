<?php namespace App\Models;

use CodeIgniter\Model;

class Bursa_model extends Model
{
	protected $table = 'bursa';
	protected $useTimestamps = true;
	protected $allowedFields = ['nama', 'ttl', 'email', 'lamar', 'cv'];

	public function getBursa($nama = false)
	{
		if ($nama == false) {
			return $this->findAll();
		}
		return $this->where(['nama' => $nama])->first();
	}
}