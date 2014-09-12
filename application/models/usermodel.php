<?php
class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
    function isValidLogin($table, $data) {
	
        $this->db->select('user_id'); 
        $this->db->where('user_email', $data['username']);
        $this->db->where('user_password', $data['password']);
        $this->db->where('user_active_status', '1');
        $query = $this->db->get($table);
		if($query->num_rows() > 0) {
			return $query->row();  
		}else {
			return '';
		}
    }

	function isPasswordValid($table, $data) {
		$this->db->where("user_id",$this->session->userdata('_user_id'));
		$this->db->where("user_password",$data['old_pwd']);
		$this->db->select('user_id');
        $query = $this->db->get($table);
		if($query->num_rows() > 0){
			return true;
		}else {
			return false;
		}
	}
	
	function isUserAlreadyExists($table, $email) {
		$this->db->where("user_email",$email);
		$this->db->select('user_id');
        $query = $this->db->get($table);
		if($query->num_rows() > 0){
			return true;
		}else {
			return false;
		}
	}
}

?>
