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
				$body = '
				<link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">
				<div style="background-color:#48586F; height:60px;">
					<div class="row" style="width:600px;background-color:#48586F;height:60px; margin:0 auto">
					  <a href="http://www.pagenx.com/" style="float:left; margin:6px 19px 0;    display: block;    text-shadow: 0 0 1px rgba(0,0,0,0.2);    zoom: 1;	text-decoration:none !important;	font-size:35px;	color:#FFF;	font-family:Source Sans Pro;	font-weight:normal;">PageN<span style="color:#D62E2E; font-size:39px">[</span>X<span style="color:#D62E2E; font-size:39px">]</span><span style="font-size:11px;">BETA</span></a>
					  <nav>
						<ul style="float: right;    margin: 0px 15px 0 0; padding: 13px 0 0; width:320px">
						  <!--<li style="float: right;list-style: none;margin: 0px 0; line-height:20px;"><a href="#" style=" color: #FFF;    font-family: Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);">Landing Page</a></li>-->
						  <li style="float: right;list-style: none;margin: 0px 0; line-height:20px;"><a href="http://www.pagenx.com/account"  style=" color: #FFF;    font-family: Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);">My Account</a></li>
						  <li style="float: right;list-style: none;margin: 0px 0; line-height:20px;"><a href="http://www.pagenx.com/login"  style=" color: #FFF;    font-family: Arial, Helvetica, sans-serif;    font-size: 16px;    padding: 10px;    text-decoration: none;    text-shadow: 0px 1px rgba(0,0,0,0.2);">Login</a></li>
						</ul>
					  </nav>
					  <br style="clear:both">
					</div>
				</div>
				<div class="row" style="width:600px; margin:0 auto">
					<p>
					This are the contents of the message filled on your <strong>PageN[X]</strong> Landing page:
					</p>
					<p> </p>
					<ul>';
					foreach($_POST['lpForm'] as $key=>$row){
						$email = (preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $row))?$row:'';
						//check if its a checkbox
						if(str_replace('_',' ',$key) == $row)
						$body .= '<li style="margin-bottom:10px;"><label style="display:block; font-weight:bold; color:#D62E2E;">'.str_replace('_',' ',$key).' -> Yes</label></li>';
						else
						$body .= '<li style="margin-bottom:10px;"><label style="display:block; font-weight:bold; color:#D62E2E;">'.str_replace('_',' ',$key).'</label><span style="display:block; font-weight:normal; color:#48586F;">'.$row.'</span></li>';
					}
						
				$body .= '
					</ul>
					</div>
				<div style="margin-top:40px;background:#EEE; height:60px;">
					<div class="row" style="width:600px; margin:0 auto; background:#EEE; height:60px;">
						<div class="copyright" style="    float: left;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    line-height: 58px;
    padding-top: 2px;
	color:#48586F;
    width: 290px;">Copyright &copy; 2013 PageNX.com All Rights Reserved</div>
						<ul style="    display: table;
    float: right;
    height: 20px;
    margin-bottom: 26px;
    margin-right: 0px;
    margin-top: 14px;">
							<li style="    float: left; font-size: 12px;   height: 20px;    list-style: none;    margin-right: 12px;"><a href="#start" style="    display: list-item;    line-height: 20px;    padding: 8px;    text-decoration: none;" >Get Started</a></li>
							<li style="    float: left; font-size: 12px;   height: 20px;    list-style: none;    margin-right: 12px;"><a href="#pricelist" style="    display: list-item;    line-height: 20px;    padding: 8px;    text-decoration: none;" >Pricing</a></li>
							<li style="    float: left;  font-size: 12px;  height: 20px;    list-style: none;    margin-right: 12px;"><a href="http://127.0.0.1/landingpage/landingpage.git/index.php/account" style="    display: list-item;    line-height: 20px;    padding: 8px;    text-decoration: none;" >My account</a></li>
						</ul>
					</div>
				</div>';				
				$this->load->library('email');
				if($email)
				$this->email->from($email, 'PageN[X] Email sender <'.$email.'>');
				else
				$this->email->from('no-reply@pagenx.com', 'PageN[X] Email sender');
				$this->email->to(base64_decode($_POST['t'])); 				
				$this->email->subject(base64_decode($_POST['sub']));
				$this->email->message($body);	
				
				$this->email->send();
				
			//	echo $this->email->print_debugger();				
				echo '1';
			}
		} else die();
	}
}

