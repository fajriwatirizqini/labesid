<?php namespace App\Controllers;

use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
	
	protected $perusahaanModel;
	public function __construct()
	{
		$this->perusahaanModel = new PerusahaanModel();
	}
	public function index()
	{
		$perusahaan = $this->perusahaanModel->findAll();

		$data = [
			'title' => 'Informasi Perusahaan &mdash; Bursa Kerja Khusus',
			'perusahaan' => $perusahaan
		];

		
		return view ('perusahaan/index', $data);
	}

	public function create()
	{
		$data = [
				'title' => 'Perusahaan Mitra &mdash; Bursa Kerja Khusus'
		];

		return view('/perusahaan/create', $data);
	}

	public function save()
	{
		//validasi input
		if(!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		])) {
			$validation = \Config\Services::validation();
			
			return redirect()->to('/perusahaan/create')->withInput()->with('validation', $validation);
		}

		$this->perusahaanModel->save([
			'gambar' => $this->request->getVar('gambar'),
			'nama' => $this->request->getVar('nama'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'link' => $this->request->getVar('link')
		]);

		session()->setFLashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/perusahaan');
	}

	public function delete($id)
	{
		$this->perusahaanModel->delete($id);
		session()->setFLashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/perusahaan');
	}

}