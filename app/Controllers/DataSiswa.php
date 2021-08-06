<?php namespace App\Controllers;

class DataSiswa extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Data Siswa &mdash; Bursa Kerja Khusus'
		];

		return view('dataSiswa', $data);
	}

	//--------------------------------------------------------------------

}