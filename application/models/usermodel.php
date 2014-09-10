<?php
class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
    function is_valid_login($user, $pass, $userType=2) {
	
        $this->db->select('pro_user_id, pro_user_full_name, pro_user_type, pro_corporate_id,pro_user_state,pro_user_city'); 
        $this->db->where('pro_user_email', $user);
        $this->db->where('pro_user_password', $pass);
        $this->db->where('pro_user_status', '1');
		if($userType!=2) {
			$this->db->where('pro_user_type', $userType);
		}
        $query = $this->db->get($this->table_name);
		if($query->num_rows() > 0) {
			return $query->row();  
		}else {
			return '';
		}
    }

	function isUserPasswordValid($data) {
		$this->db->where("pro_user_id",$this->session->userdata('_user_id'));
		$this->db->where("pro_user_password",$data['old_pwd']);
		$this->db->select('pro_user_id');
        $query = $this->db->get('pro_users');
		if($query->num_rows() > 0){
			return true;
		}else {
			return false;
		}
	}
	
	function isUserExists($email) {
		$this->db->where("pro_user_email",$email);
		$this->db->select('pro_user_id');
        $query = $this->db->get('pro_users');
		if($query->num_rows() > 0){
			return true;
		}else {
			return false;
		}
	}
	
    function get_user_details($userId) {
        $this->db->where('pro_user_id', $userId);
		$this->db->select();
        $query = $this->db->get($this->table_name);
        if($query->num_rows() > 0) {
                return $query->row();
        }else {
                return '';
        }
    }

}

?>
