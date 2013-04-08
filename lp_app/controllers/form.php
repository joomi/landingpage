<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ses'])){
			//get page id from ses
			$ses = $_POST['ses'];
			$query = $this->db->query("SELECT id FROM pg_md5_ids WHERE md5 = '$ses'");
			$row = $query->row();
			$id = $row->id;
			$data = json_encode($_POST['lpForm']);
			
			$sql = "INSERT INTO form_submisions (`time`, `page_id`, `data`, `state`) VALUES (NOW(), '$id', '$data', '0');"; 
			$this->db->query($sql);
			echo '0';
		} else die();
	}
}
