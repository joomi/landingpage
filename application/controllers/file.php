<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File extends CI_Controller {

	public function index()
	{
		$this->load->view('canvas/uploadify.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */