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
			$sql = "UPDATE page SET `last_update` = NOW(), `data` = '$html' WHERE `user_id` = $user_id AND `id` = $page_id AND `template` = '$template'"; 
			$this->db->query($sql);
			echo 'n';
		} else {
			$sql = "INSERT INTO page (`user_id`, `create_date`, `last_update`, `data`, `template`) VALUES ($user_id, NOW(), NOW(), '$html', '$template') "; 
			$this->db->query($sql);
			$page_id = $this->db->insert_id();
			echo $page_id;
		}
		
		//build the cached page
		$head = file_get_contents(ABSPATH.'/application/views/templates/'.base64_decode($template).'/head.php');
		$head = str_replace('<?php echo base_url();?>', base_url(), $head);
		$body = urldecode(base64_decode($html));
		$dir = ABSPATH . '/lp/' . $user->id;
		mkdir($dir, 0755);		
		$file = $dir.'/page_'.$page_id.'.html';
		$fh = fopen($file, 'w') or die("can't open file");
		$html = '<!doctype html>
				<html class="no-js" lang="en"> 
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
					<title>HTML5 canvas page</title>
					<meta name="description" content="">
					<meta name="viewport" content="width=device-width">';
		$html .= $head;
		$html .= '</head><body>'.$body.'</body></html>';
		fwrite($fh, $html);
		fclose($fh);		
	}
}
