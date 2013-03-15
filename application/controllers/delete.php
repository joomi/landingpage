<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in()) die('No direct access');
		$page_id = $_POST['id'];
		$user = $this->ion_auth->user()->row();
		$user_id = $user->id;
		
		if($page_id){
			$sql = "DELETE FROM page WHERE `user_id` = $user_id AND `id` = $page_id"; 
			$this->db->query($sql);
		}
		
		$dir = ABSPATH . '/lp/' . $user->id;
		$file = $dir.'/page_'.$page_id.'.html';
		unlink($file);
	}
}
