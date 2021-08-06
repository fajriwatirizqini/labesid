<?php namespace App\Models;

use CodeIgniter\Model;

class Diskusi_model extends Model
{
	protected $table = 'diskusi';
	protected $useTimestamps = true;
	protected $allowedFields = ['nama', 'topik', 'isi'];

	public function getDiskusi($nama = false)
	{
		if ($nama == false) {
			return $this->findAll();
		}
		return $this->where(['nama' => $nama])->first();
	}
}