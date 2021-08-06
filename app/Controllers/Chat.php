<?php namespace App\Controllers;

use App\Models\ChatModel;

class Chat extends BaseController
{
	protected $chatModel;

	public function __construct()
	{
		$this->chatModel = new ChatModel();
	}
	
	public function index()
	{
		$chat = $this->chatModel->findAll();

		$data = [
			'title' => 'Konsultasi Siswa &mdash; Bursa Kerja Khusus',
			'chat' => $chat
		];
		return view('chat/index', $data);
	}


	public function save()
	{
		//validasi input
		if(!$this->validate([
			'pesan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi.'
				]
			]
		])) {
			$validation = \Config\Services::validation();
			
			return redirect()->to('/chat/index')->withInput()->with('validation', $validation);
		}

		$this->chatModel->save([
			'pesan' => $this->request->getVar('pesan')
		]);

		session()->setFLashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/chat');
	}

	public function delete($id)
	{
		$this->chatModel->delete($id);
		return redirect()->to('/chat');
	}
}