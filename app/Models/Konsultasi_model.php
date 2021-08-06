<?php namespace App\Models;

use CodeIgniter\Model;

class Konsultasi_model extends Model
{
	protected $table = 'konsultasi';
	protected $useTimestamps = true;
	protected $allowedFields = ['pesan'];

	public function getKonsultasi($pesan = false)
	{
		if ($pesan == false) {
			return $this->findAll();
		}
		return $this->where(['pesan' => $pesan])->first();
	}
}