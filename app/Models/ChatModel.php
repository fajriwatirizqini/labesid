<?php namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
	protected $table = 'chat';
	protected $allowedFields = ['pesan'];

	public function getChat($pesan = false)
	{
		if ($pesan == false) {
			return $this->findAll();
		}
		return $this->where(['pesan' => $pesan])->first();
	}
}