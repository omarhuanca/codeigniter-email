<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sendEmail() {

		$subject = 'This is a test';
		$message = '
			<p>This message has been sent for testing purposes.</p>

			<!-- Attaching an image example - an inline logo. -->
			<p><img src="cid:logo_src" /></p>
		';

		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';

		$result = $this->email
							->from('websolutionssrl@gmail.com')
							->to('omar.huanca.balboa@gmail.com')
							->subject($subject)
							->message($body)
							->send();

		$this->load->view('sendEmail');
	}

	function send() {
		// The message
		$message = "Line 1\r\nLine 2\r\nLine 3";

		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70, "\r\n");

		// Send
		mail('omar.huanca.balboa@gmail.com', 'Email from Codeigniter', $message);

		$this->load->view('send');
	}
}
