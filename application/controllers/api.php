<?php
/*
 * AML Consulting C.A.
 * Department: AML Consulting Software Labs  
 * Division: Web
 * 
 * Created: 05/08/2016
 * Last modify: 05/08/2016
 * Edition: 1.0.0
 * 
 * Filename: api.php
 * 
 * Comments: Functions for open API
 * 
 */
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
	public function write($data)
	{
		write_file($this->config->item('path_file'), '');
		write_file($this->config->item('path_file'), $data);
	}
}
