<?php namespace App\Controllers;

use App\SekolahModel;

class DataSekolah_admin extends BaseController
{
	protected $sekolahModel;

	public function index()
	{
		$data=[
			'title' => 'Data Sekolah &mdash; Bursa Kerja Khusus'
		];
		return view('admin/sekolah/index', $data);
	}

	//--------------------------------------------------------------------

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
			return redirect()->to('/sekolah/create')->withInput()->with('validation', $validation);
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

		return redirect()->to('admin/sekolah/');
	}

	public function delete($id)
	{
		$this->sekolahModel->delete($id);
		return redirect()->to('admin/sekolah/');

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

		return redirect()->to('admin/sekolah');
	}

}