<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmvctest extends MX_Controller {
	public function index()
	{
		// $this->load->view('welcome_message');
		echo "This is HMVC";
	}
	function sayhello($firstname,$lastname){
		echo "Hello. How Do You Do? $firstname $lastname";
	}
}
