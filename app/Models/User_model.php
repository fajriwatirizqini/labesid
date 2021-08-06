<?php namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model 
{
	// protected $table = 'admin';
	// protected $allowedFields = ['user_name', 'user_password'];

	public function login_user($user, $pass)
	{
		return $this->db->table('admin')->where([
			'user_name' => $user,
			'user_password' => $pass
		])->get()->getRowArray();
	}
}