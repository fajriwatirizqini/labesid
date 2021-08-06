<?php namespace App\Controllers;

use App\Models\Bursa_model;

class Bursa extends BaseController
{
	public function __construct()
	{
		$this->bursa_model = new Bursa_model();
	}
	public function index()
	{
		$bursa = $this->bursa_model->findAll();
		// session();
		$data = [
			'title' => 'Bursa Kerja &mdash; Bursa Kerja Khusus',
			'validation' => \Config\Services::validation(),
			'bursa' => $bursa
		];

		return view ('bursa/index', $data);
	}

	public function save()
	{
		//validasi input
		if(!$this->validate([
			'email' => 'required',
			'lamar' => 'required',
			'cv' => 'required'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/bursa/index')->withInput()->with('validation', $validation);
		}

		$this->bursa_model->save([
			'nama' => $this->request->getVar('nama'),
			'ttl' => $this->request->getVar('ttl'),
			'email' => $this->request->getVar('email'),
			'lamar' => $this->request->getVar('lamar'),
			'cv' => $this->request->getVar('cv')
		]);

		return redirect()->to('/bursa/berhasil');
	}

	public function berhasil()
	{

		$data = [
			'title' => 'Succes &mdash; Bursa Kerja Khusus'
		];

		return view ('bursa/berhasil', $data);
	}
}