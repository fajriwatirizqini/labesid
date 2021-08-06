<?php namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
	protected $table = 'perusahaan';
	// protected $useTimestamps = true;
	protected $allowedFields = ['gambar', 'nama', 'deskripsi', 'link'];

	public function getKonsultasi($nama = false)
	{
		if ($nama == false) {
			return $this->findAll();
		}
		return $this->where(['nama' => $nama])->first();
	}
}