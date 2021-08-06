<?php namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
	protected $table = 'pelatihan';
	protected $allowedFields = ['lembaga', 'bidang', 'level', 'peserta', 'link', 'informasi'];

	public function getKonsultasi($lembaga = false)
	{
		if ($lembaga == false) {
			return $this->findAll();
		}
		return $this->where(['lembaga' => $lembaga])->first();
	}
}