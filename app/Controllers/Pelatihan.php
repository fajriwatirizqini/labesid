<?php namespace App\Controllers;

use App\Models\PelatihanModel;

class Pelatihan extends BaseController
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

		
		return view ('/pelatihan', $data);
	}

}