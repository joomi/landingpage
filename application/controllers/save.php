<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Save extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in()) die('No direct access');
		$page_id = (isset($_POST['id']) && (int)$_POST['id'] > 0)?$_POST['id']:NULL;
		$html = $_POST['h'];
		$template = $_POST['t'];
		$user = $this->ion_auth->user()->row();
		$user_id = $user->id;
		if($page_id){
			$sql = "UPDATE page SET `last_update` = NOW(), `data` = '$html' WHERE `user_id` = $user_id AND `id` = $page_id AND `template` = $template"; 
			$this->db->query($sql);
			echo 'n';
		} else {
			$sql = "INSERT INTO page (`user_id`, `create_date`, `last_update`, `data`, `template`) VALUES ($user_id, NOW(), NOW(), '$html', '$template') "; 
			$this->db->query($sql);
			echo $this->db->insert_id();
		}
	}
}
