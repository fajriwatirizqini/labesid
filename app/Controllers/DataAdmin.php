<?php namespace App\Controllers;

class DataAdmin extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Home Admin &mdash; Bursa Kerja Khusus'
		];
		return view('admin/dashboard_admin', $data);
	}

	public function datasiswa_admin()
	{
		$data=[
			'title' => 'Data Siswa &mdash; Bursa Kerja Khusus'
		];
		return view('admin/dataSiswa_admin', $data);
	}


}
