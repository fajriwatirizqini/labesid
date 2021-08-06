<?php  namespace App\Controllers;

use App\Models\SekolahModel;

class Sekolah extends BaseController
{
	protected $sekolahModel;
	public function __construct()
	{
		$this->sekolahModel = new SekolahModel();
	}
	public function index()
	{
		$sekolah = $this->sekolahModel->findAll();

		$data = [
			'title' => 'Data Sekolah &mdash; Bursa Kerja Khusus',
			'sekolah' => $sekolah
		];


		return view('admin/sekolah/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Sekolah',
			'validation' =>\Config\Services::validation()
		];

		return view('admin/sekolah/create', $data);
	}

	public function save()
	{
		//validasi input
		if(!$this->validate([
			'NPSN' => [
				'rules' => 'required|is_unique[sekolah.NPSN]',
				'errors' => [
					'required' => '{field} sekolah harus diisi ',
					'is_unique' => '{field} sekolah sudah terdaftar'
				]		
					]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('admin/sekolah/create')->withInput()->with('validation', $validation);
		}


		$this->sekolahModel->save([
			'Nama' => $this->request->getVar('Nama'),
			'NPSN' => $this->request->getVar('NPSN'),
			'NSS' => $this->request->getVar('NSS'),
			'Akreditasi' => $this->request->getVar('Akreditasi'),
			'Telepon' => $this->request->getVar('Telepon'),
			'Email' => $this->request->getVar('Email')
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/sekolah/index');
	}

	public function delete($id)
	{
		$this->sekolahModel->delete($id);
		return redirect()->to('/sekolah/index');

	}

	public function edit($id)
	{
		$data = [
			'title' => 'Form ubah Data Sekolah',
			'validation' =>\Config\Services::validation(),
			'sekolah' => $this->sekolahModel->getSekolah($id)
		];

		return view('admin/sekolah/edit', $data);
	}

	public function update($id)
	{
		$this->sekolahModel->save([
			'id' => $id,
			'Nama' => $this->request->getVar('Nama'),
			'NPSN' => $this->request->getVar('NPSN'),
			'NSS' => $this->request->getVar('NSS'),
			'Akreditasi' => $this->request->getVar('Akreditasi'),
			'Telepon' => $this->request->getVar('Telepon'),
			'Email' => $this->request->getVar('Email')
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah');

		return redirect()->to('/Sekolah/index');
	}

}
?>
