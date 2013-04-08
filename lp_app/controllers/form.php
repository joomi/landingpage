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
			if($id){
				//save the submision in the DB
				$data = json_encode($_POST['lpForm']);
				$sql = "INSERT INTO form_submisions (`time`, `page_id`, `data`, `state`) VALUES (NOW(), '$id', '$data', '0');"; 
				$this->db->query($sql);
				//send the mail
				$this->load->library('email');
				
				$this->email->from('no-reply@pagenx.com', 'PageN[X] Email sender');
				$this->email->to(base64_decode($_POST['t'])); 				
				$this->email->subject(base64_decode($_POST['sub']));
				$this->email->message('');	
				
				$this->email->send();
				
				echo $this->email->print_debugger();				
				echo '0';
			}
		} else die();
	}
}

$body = '
<link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">
<header style="background-color:#48586F; height:40px;">
    <div class="row" style="width:600px; margin:0 auto">
      <a href="#" style="float:left; margin:17px 10px 0;    display: block;    text-shadow: 0 0 1px rgba(0,0,0,0.2);    zoom: 1;	text-decoration:none !important;	font-size:35px;	color:#FFF;	font-family:Source Sans Pro;	font-weight:normal;">PageN<span style="color:#D62E2E; font-size:39px">[</span>X<span style="color:#D62E2E; font-size:39px">]</span><span style="font-size:11px;">BETA</span></a>
      <nav>
        <ul style="     display: table;    float: right;    margin: 0px;    margin-right: 12px;    min-height: 60px;    padding-top: 13px; width:300px">
          <li style="float: left;list-style: none;margin-right: 5px; line-height:20px;"><a href="#" style="    -moz-border-radius: 6px;    -moz-transition: 200ms linear background-color;    -webkit-border-radius: 6px;    -webkit-transition: 200ms linear background-color;    border-radius: 6px;    color: #FFF;    font-family: "Raleway", Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);    transition: 200ms linear background-color;">Landing Page</a></li>
          <li style="float: left;list-style: none;margin-right: 5px; line-height:20px;"><a href="http://www.pagenx.com/account"  style="    -moz-border-radius: 6px;    -moz-transition: 200ms linear background-color;    -webkit-border-radius: 6px;    -webkit-transition: 200ms linear background-color;    border-radius: 6px;    color: #FFF;    font-family: "Raleway", Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);    transition: 200ms linear background-color;">My Account</a></li>
          <li style="float: left;list-style: none;margin-right: 5px; line-height:20px;"><a href="http://www.pagenx.com/login"  style="    -moz-border-radius: 6px;    -moz-transition: 200ms linear background-color;    -webkit-border-radius: 6px;    -webkit-transition: 200ms linear background-color;    border-radius: 6px;    color: #FFF;    font-family: "Raleway", Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);    transition: 200ms linear background-color;">Login</a></li>
        </ul>
      </nav>
      <br style="clear:both">
    </div>
</header>
<section>
	<ul>
    	<li>';
        
$body .= '</li>
    </ul>
</section>

<footer>
    <div class="row">
        <div class="copyright">Copyright © 2013 Pagenx.com All Rights Reserved</div>
        <ul>
            <li><a href="#features">Features</a></li>
            <li><a href="#start">Get Started</a></li>
            <li><a href="#pricelist">Pricing</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="http://127.0.0.1/landingpage/landingpage.git/index.php/account">My account</a></li>
        </ul>
    </div>
</footer>';