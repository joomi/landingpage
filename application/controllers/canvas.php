<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Canvas extends CI_Controller {

	public function index()
	{
		if(!$this->ion_auth->logged_in())
		redirect('auth/login', 'refresh');
		else
		$this->load->view('canvas/canvas.html.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */