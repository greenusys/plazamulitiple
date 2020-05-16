<?php
	/**
	 * 
	 */
	class Email extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
		private $mail="pandeygreen5@gmail.com";
		private $pwd="qweasd@123";
		function __construct()
		{
		        parent::__construct();   
		        $this->load->library('email');
		}

		function index()
		{

			$config = array(
			    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			    'smtp_host' => 'ssl://smtp.gmail.com',
			    'smtp_port' => '465',
			    'smtp_user' => $this->mail,
			    'smtp_pass' => $this->pwd,
			    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			    'mailtype' => 'html', //plaintext 'text' mails or 'html'
			    'smtp_timeout' => '4', //in seconds
			    'charset' => 'iso-8859-1',
			    'wordwrap' => TRUE
			);

			$this->email->initialize($config);
			// $this->load->library('email', $config);
			// $this->email->set_newline("\r\n");

			// Set to, from, message, etc.

			// $result = $this->email->send();
		    // $config['protocol']    = 'smtp';
		    // $config['smtp_host']    = 'ssl://smtp.gmail.com';
		    // $config['smtp_port']    = '465';
		    // $config['smtp_timeout'] = '7';
		    // $config['smtp_user']    = $this->mail;
		    // $config['smtp_pass']    = $this->pwd;
		    // $config['charset']    = 'utf-8';
		    // $config['newline']    = "\r\n";
		    // $config['mailtype'] = 'text'; // or html
		    // $config['validation'] = TRUE; // bool whether to validate email or not      

		    //


		    $this->email->from($this->mail, 'myname');
		    $this->email->to('rohansingh14061995@gmail.com');

		    $this->email->subject('Email Test');
		    $this->email->message('Testing the email class.');  

		    $this->email->send();

		    echo $this->email->print_debugger();

		    //  $this->load->view('email_view');

		   }
	}

?>