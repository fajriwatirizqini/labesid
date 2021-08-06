<?php namespace App\Controllers;

class DataAlumni extends BaseController
{
	public function index()
	{
		$data = [
				'title' => 'Data Alumni &mdash; Bursa Kerja Khusus'
		];

		return view('DataAlumni', $data);
	}

	//--------------------------------------------------------------------

}