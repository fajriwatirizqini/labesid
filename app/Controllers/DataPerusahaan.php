<?php namespace App\Controllers;

use App\Models\PerusahaanAdmin_Model;

class DataPerusahaan extends BaseController
{
	protected $perusahaanAdmin_Model;

	public function __construct()
	{
		$this->perusahaanAdmin_Model = new PerusahaanAdmin_Model();
	}

	public function index()
	{
		//$perusahaan = $this->perusahaanModel->findAll();


		$data=[
			'title' => 'Data Perusahaan &mdash; Bursa Kerja Khusus',
			'perusahaan' => $this->perusahaanAdmin_Model->getPerusahaan()
		];

		return view('admin/dataperusahaan/index', $data);
	}

	public function create()
	{
		//session();
		$data=[
			'title' => 'Form Tambah Data Perusahaan',
			'validation' => \Config\Services::validation()
		];

		return view('admin/dataperusahaan/create', $data);
	}

	public function save()
	{
		//validasi input
		if(!$this->validate([
			'Nama' => [
				'rules' => 'required|is_unique[Perusahaan.Nama]',
			'errors' => [
				'required' => '{field} Perusahaan harus diisi',
				'is_unique' => '{field} Perusahaan telah terdaftar' 
				]
			],
			// 'Kode' => [
			// 	'rules' => 'required|is_unique[Perusahaan.Kode]',
			// 'errors' => [
			// 	'required' => '{field} Perusahaan harus diisi',
			// 	'is_unique' => '{field} Perusahaan telah terdaftar' 
			// 	]
			// ],
			'Logo' => [
				'rules' => 'max_size[Logo,1024]|is_image[Logo]|mime_in[Logo,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar melebihi size',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]

			]

		])){
			//$validation = \Config\Services::validation();
			//return redirect()->to('/Perusahaan/create')->withInput()->with('validation', $validation);
			return redirect()->to('admin/dataperusahaan/create')->withInput();
		}

		//ambil gambar
		$fileLogo = $this->request->getFile('Logo');
		//apakah tidak ada gambar di upload
		if ($fileLogo->getError() == 4){
			$namaLogo = 'default.jpg';
		}else {
		//generate nama logo random
		$namaLogo = $fileLogo->getRandomName();
		//pindahkan file ke folder img
		$fileLogo->move('img/', $namaLogo);

		//ambil nama File
		//$namaLogo = $fileLogo->getName();
		}

		$this->perusahaanAdmin_Model->save([
			'Logo' => $namaLogo,
			'Nama' => $this->request->getVar('Nama'),
			'Kode' => $this->request->getVar('Kode'),
			'Alamat' => $this->request->getVar('Alamat'),
			'Email' => $this->request->getVar('Email'),
			'Telepon' => $this->request->getVar('Telepon'),
			'Situs' => $this->request->getVar('Situs'),
			'Lowongan' => $this->request->getVar('Lowongan')
		]);

		session()->setFlashdata('pesan','Data berhasil ditambahkan');

		return redirect()->to('/dataperusahaan/');
	}

	public function delete($id)
	{

		//cari gambar berdasarkan id
		$dataperusahaan = $this->perusahaanAdmin_Model->find($id);

		//cek jika file gambarnya default.jgp
		if($dataperusahaan['Logo'] != 'default.jpg'){
			//hapus gambar
			unlink('img/' . $dataperusahaan['Logo']);

		}


		$this->perusahaanAdmin_Model->delete($id);
		return redirect()->to('/dataperusahaan/'); 
	}

	public function edit($id)
	{
		$data=[
			'title' => 'Form Ubah Data Perusahaan',
			'validation' => \Config\Services::validation(),
			'perusahaan' => $this->perusahaanAdmin_Model->getPerusahaan($id)
		];

		return view('admin/dataperusahaan/edit', $data);
	}

	public function update($id)
	{

		if(!$this->validate([
			'Logo' => [
				'rules' => 'max_size[Logo,1024]|is_image[Logo]|mime_in[Logo,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar melebihi size',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]

			]
		])){
			return redirect()->to('/dataperusahaan/edit/' . $this->request->getVar('id'))->withInput();
		}

		$fileLogo = $this->request->getFile('Logo');

		//cek gambar berubah atau tidak
		if($fileLogo->getError() == 4){
			$namaLogo = $this->request->getVar('LogoLama');
		}else {
			//generate nama file random
			$namaLogo = $fileLogo->getRandomName();
			//pindahkan gambar
			$fileLogo->move('img', $namaLogo);
			//hapus file lama
			unlink('admin_labesid/img/'. $this->request->getVar('LogoLama'));
		}

		$this->perusahaanAdmin_Model->save([
			'id' => $id,
			'Logo' => $namaLogo,
			'Nama' => $this->request->getVar('Nama'),
			'Kode' => $this->request->getVar('Kode'),
			'Alamat' => $this->request->getVar('Alamat'),
			'Email' => $this->request->getVar('Email'),
			'Telepon' => $this->request->getVar('Telepon'),
			'Situs' => $this->request->getVar('Situs'),
			'Lowongan' => $this->request->getVar('Lowongan')
		]);

		session()->setFlashdata('pesan','Data berhasil diubah');

		return redirect()->to('/dataperusahaan/');
	}
}

