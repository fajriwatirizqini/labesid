<?php namespace App\Controllers;

class HomeSiswa extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Home Siswa &mdash; Bursa Kerja Khusus'
		];

		return view('/homeSiswa', $data);
	}

	//--------------------------------------------------------------------

}