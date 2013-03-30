<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Save extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in()) die('No direct access');
		$page_id = (isset($_POST['id']) && (int)$_POST['id'] > 0)?$_POST['id']:NULL;
		$html = $_POST['h'];
		$title = $_POST['title'];
		$clean_HTML = urldecode(base64_decode($html));
		$clean_HTML = str_replace('&lt;?php', "", $clean_HTML);
		$clean_HTML = str_replace('?&gt;', "", $clean_HTML);
		$clean_HTML = str_replace('&lt;script', "", $clean_HTML);
		$clean_HTML = str_replace('&lt;embed', "", $clean_HTML);
		$clean_HTML = str_replace('&lt;object', "", $clean_HTML);			  
		$html = base64_encode(urlencode($clean_HTML));

		$template = $_POST['t'];
		$user = $this->ion_auth->user()->row();
		$user_id = $user->id;
		if($page_id){
			$sql = "UPDATE page SET `last_update` = NOW(), `data` = '$html' , `title` = '$title' WHERE `user_id` = $user_id AND `id` = $page_id AND `template` = '$template'"; 
			$this->db->query($sql);
			echo 'n';
		} else {
			$sql = "INSERT INTO page (`title`, `user_id`, `create_date`, `last_update`, `data`, `template`) VALUES ('$title', $user_id, NOW(), NOW(), '$html', '$template') "; 
			$this->db->query($sql);
			$page_id = $this->db->insert_id();
			echo $page_id;
		}
		
		//build the cached page
		$head = file_get_contents(ABSPATH.'/lp_app/views/templates/'.base64_decode($template).'/head.php');
		$head = str_replace('<?php echo base_url();?>', base_url(), $head);
		$body = urldecode(base64_decode($html));
		$body = str_replace(' echo base_url();', base_url(), $body);
		$dir = ABSPATH . '/lp/' . $user->id;
		if(!is_dir($dir)) mkdir($dir, 0755);		
		$file = $dir.'/page_'.$page_id.'.html';
		$fh = fopen($file, 'w') or die("can't open file");
		$html = $head;
		$html .= '<body>'.$body;
		//pixel - hit counter
		$html .= '<img src="'.base_url().'index.php/pixel?p='.$page_id.'" width="1" height="1" />';
		$html .= '</body></html>';
		fwrite($fh, $html);
		fclose($fh);		
	}
}
