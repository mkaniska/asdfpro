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
	
    function isUserAlreadyExists($email) {
        $this->db->where("user_email",trim($email));
        $this->db->select('user_id');
        $query = $this->db->get('uxi_users');
        if($query->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }
    
    function activateUser($data) {
        $this->db->where("user_id",$data['id']);
        $this->db->where("user_email",$data['email']);
        $this->db->where("user_active_status","0");
        $this->db->update('uxi_users', array('user_active_status'=>'1'));
        if($this->db->affected_rows()>0) {
            return true;
        }else {
            return false;
        }
    }    
}

?>
