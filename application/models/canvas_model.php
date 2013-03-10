<?php

class Canvas_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_data()
    {
		$data = '';
		$user = $this->ion_auth->user()->row();
		$user_id = $user->id;
		$id = (isset($_GET['id']) && (int)$_GET['id'] > 0)?$_GET['id']:'';
		if($id && $user_id){
			$sql = "SELECT * FROM page WHERE id = $id AND user_id = $user_id "; 
			$query = $this->db->query($sql);
	        $data = $query->result();
		}
		return $data;
    }

}

?>