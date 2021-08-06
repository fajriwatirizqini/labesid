<?php namespace App\Controllers;

use App\Models\PerusahaanModel;

class Info extends BaseController
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

		
		return view ('info/index', $data);
	}
}