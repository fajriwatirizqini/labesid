<?php namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Home extends BaseController
{
	public function __construct()
	{
		helper(['form']);
	}

	//--------------------------------------------------------------------

	public function index()
	{
		$data = [
				'title' => 'Beranda &mdash; Bursa Kerja Khusus'
		];

		return view('home.php', $data);
	}

	//--------------------------------------------------------------------

	public function send()
	{
		$name    = $this->request->getPost('name');
		$email   = $this->request->getPost('email');
		$subject = $this->request->getPost('subject');
		$message = $this->request->getPost('message');

		$mail = new PHPMailer(true);

		try {
			$mail->SMTPDebug  = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host 	  = 'ssl://smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'faizfive123@gmail.com';
			$mail->Password   = 'yougotme';
			$mail->SMTPSecure = 'ssl';
			$mail->Port 	  = 465;

			$mail->setFrom($email, $name);
			$mail->addAddress('faizfive123@gmail.com');
			$mail->addReplyTo($email);

			// content
			$mail->isHTML(true);
			$mail->email = $email;
			$mail->subject = $subject;
			$mail->Body    = $message;

			$mail->send();
			session()->setFlashdata('success', 'Send Email Successfully');
			return redirect()->to('/home');
		} catch (Exception $e) {
			session()->setFlashdata('error', "Send Email Failed. Error: " . $mail->ErrorInfo);
			return redirect()->to('/home');
		}
	}

}