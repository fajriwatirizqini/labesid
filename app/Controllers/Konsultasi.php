<?php namespace App\Controllers;

use App\Models\Konsultasi_model;

class Konsultasi extends BaseController
{
	protected $konsultasiModel;
	public function __construct()
	{
		$this->konsultasi_model = new Konsultasi_model();
	}
	public function index()
	{
		$konsultasi = $this->konsultasi_model->findAll();

		$data = [
			'title' => 'Konsultasi &mdash; Bursa Kerja Khusus',
			'konsultasi' => $konsultasi
		];

		
		return view ('/konsultasi', $data);
	}


	public function save()
	{
		//validasi input
		if(!$this->validate([
			'pesan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		])) {
			$validation = \Config\Services::validation();
			
			return redirect()->to('/konsultasi')->withInput()->with('validation', $validation);
		}

		$this->konsultasi_model->save([
			'pesan' => $this->request->getVar('pesan')
		]);

		session()->setFLashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/konsultasi');
	}

	public function delete($id)
	{
		$this->konsultasi_model->delete($id);
		return redirect()->to('/konsultasi');
	}
}
