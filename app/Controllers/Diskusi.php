<?php namespace App\Controllers;

use App\Models\Diskusi_model;

class Diskusi extends BaseController
{
	protected $diskusi_model;
	public function __construct()
	{
		$this->diskusi_model= new Diskusi_model();
	}

	public function index()
	{
		//$diskusi = $this->diskusiModel->findAll();

		$data = [
			'title' => 'Diskusi &mdash; Bursa Kerja Khusus',
			'diskusi' => $this->diskusi_model->getDiskusi()
		];
		

		return view ('diskusi/index', $data);
	}

	public function create()
	{
		
		$data = [
			'title' => 'Tambah Data Diskusi',
			'validation' => \Config\Services::validation()
		];
		return view('/diskusi/create', $data);
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
			
			return redirect()->to('diskusi_siswa/create')->withInput()->with('validation', $validation);
		}

		$this->diskusi_model->save([
			'nama' => $this->request->getVar('nama'),
			'topik' => $this->request->getVar('topik'),
			'isi' => $this->request->getVar('isi')
		]);

		session()->setFLashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/diskusi');
	}

	public function delete($id)
	{
		$this->diskusi_model->delete($id);
		session()->setFLashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/diskusi');
	}

	public function reply($id)
	{
		$data = [
			'title' => 'Ubah Data Diskusi',
			'validation' => \Config\Services::validation(),
			'diskusi' => $this->diskusi_model->getDiskusi($id)
		];
		return view('diskusi/reply', $data);
	}
}
