<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pixel extends CI_Controller {

	public function index()
	{
		//set the image headers
		$x = 1;
		$y = 1;
		$gd = imagecreatetruecolor($x, $y);
		$white = imagecolorallocate($gd, 255, 255, 255);  
		header('Content-Type: image/png');
		imagepng($gd);
		// update the hit counter
		$page_id = $_GET['p'];
		$ref = $_SERVER['HTTP_REFERER'];
		if(strstr($ref, 'page_'.$page_id)){
			$sql = "UPDATE page SET `hits` = `hits` + 1 WHERE `id` = $page_id"; 
			$this->db->query($sql);
		}
	}
}
