<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Canvas extends CI_Controller {

	public function index()
	{
		$data['query']  = '';
		$data['state']  = 0;
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} else {
			$this->load->model('Canvas_model');
			$data['query'] = $this->Canvas_model->get_data();
			if($data['query']) $data['state'] = 1;
			$this->load->view('canvas/canvas.html.php', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */