<?php namespace App\Controllers;

class HomeSekolah extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Home Sekolah &mdash; Bursa Kerja Khusus'
		];

		return view('/homeSekolah', $data);
	}

	//--------------------------------------------------------------------

}