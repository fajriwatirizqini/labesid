<?php namespace App\Controllers;

use App\Models\PelatihanModel;

class DataPelatihan extends BaseController
{
	
	protected $pelatihanModel;

	public function __construct()
	{
		$this->pelatihanModel = new PelatihanModel();
	}

	public function index()
	{
		$pelatihan = $this->pelatihanModel->findAll();

		$data = [
			'title' => 'Pelatihan &mdash; Bursa Kerja Khusus',
			'pelatihan' => $pelatihan
		];

		
		return view ('/datapelatihan/index', $data);
	}

	//--------------------------------------------------------------------

	public function create()
	{
		$data = [
			'title' => ' Tambah Pelatihan Siswa Mitra &mdash; Bursa Kerja Khusus'
		];

		return view ('/datapelatihan/create', $data);
	}

	public function save()
	{
		//validasi input
		if(!$this->validate([
			'lembaga' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		])) {
			$validation = \Config\Services::validation();
			
			return redirect()->to('/datapelatihan/create')->withInput()->with('validation', $validation);
		}

		$this->pelatihanModel->save([
			'lembaga' => $this->request->getVar('lembaga'),
			'bidang' => $this->request->getVar('bidang'),
			'level' => $this->request->getVar('level'),
			'peserta' => $this->request->getVar('peserta'),
			'informasi' => $this->request->getVar('informasi')
		]);

		session()->setFLashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/datapelatihan/');
	}

	public function delete($id)
	{
		$this->pelatihanModel->delete($id);
		return redirect()->to('/datapelatihan/'); 
	}
}