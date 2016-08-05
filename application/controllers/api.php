<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		$data = array();
		$check = read_file($this->config->item('path_file'));
		if ($check === FALSE) {		
		    $data['content'] = 'N/A';
		}else{						
			if($check == '' || $check == NULL){ $data['content'] = $this->html->GetLogin(); }else{ $data['content'] = $this->html->openSystem($check); };
		}
		$this->load->view('view', $data);
	}
	
}
