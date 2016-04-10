<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->controller();
		$this->load->view('welcome_message');
	}
	
	public function help(){
		$this->load->view('help');
	}
}
