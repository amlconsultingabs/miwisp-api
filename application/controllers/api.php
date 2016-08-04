<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['form_login'] = $this->html->GetLogin();
		$data['domain'] = 'http://localhost/system';
		$this->load->view('view', $data);
	}
	
	public function checkLogin()
	{
		$data = array();
		$data['form_login'] = $this->html->GetLogin();
		$this->load->view('view', $data);
	}
}
