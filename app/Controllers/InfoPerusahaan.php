<?php namespace App\Controllers;

class InfoPerusahaan extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Beranda &mdash; Bursa Kerja Khusus'
		];

		return view('/info_perusahaan', $data);
	}

	//--------------------------------------------------------------------

}