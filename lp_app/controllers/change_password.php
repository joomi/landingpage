<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_password extends CI_Controller {

	public function index()
	{
		if(!$this->ion_auth->logged_in()){
			$this->session->set_flashdata('return', base64_encode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
			redirect('auth/login', 'refresh');
		} else {		
			$this->load->view('account/change_password.html.php');
		}
	}
}
