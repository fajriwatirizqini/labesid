<?php namespace App\Controllers;

use App\Models\DataKonsulModel;

class DataKonsul extends BaseController
{
	protected $dataKonsulModel;
	public function __construct()
	{
		$this->dataKonsulModel = new DataKonsulModel();
	}

	public function index()
	{
		$datakonsul = $this->dataKonsulModel->findall();
		$data=[
			'title' => 'Data Konsultasi Siswa &mdash; Bursa Kerja Khusus',
			'datakonsul'=> $datakonsul
		];

		return view('datakonsul', $data);
	}

}