<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends MX_Controller {
	public function index()
	{
		$this->load->model('mdl_tasks');
		$data['query'] = $this->mdl_tasks->get('priority');
		$this->load->view('display.php',$data);
	}
}
