<?php namespace App\controllers;

use CodeIgniter\Controller;
use App\Models\User_model;

class LoginSekolah extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->User_model = new User_model();
	}

	//--------------------------------------------------------------------

	public function index()
	{
		$data['title'] = "Login Sekolah &mdash; Bursa Kerja Khusus";
		helper(['form']);

		return view('loginSekolah', $data);
	}

	//--------------------------------------------------------------------

	public function login()
	{
		$user = $this->request->getPost('username');
		$pass = $this->request->getPost('password');

		$cek = $this->User_model->login_user($user, $pass);

		if ($cek) {
			session()->set('username', $cek['user_name']);
			session()->set('password', $cek['user_password']);

			return redirect()->to(base_url('/homeSekolah'));
		} else {
			session()->setFlashdata('errors', ['<center>Username dan Password Salah</center>']);
			return redirect()->to('/loginSekolah');
		}
	}
}