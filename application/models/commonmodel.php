<?php
class CommonModel extends CI_Model {
  
    public function __construct() 
    {
        parent::__construct();
    }
    
    function get_states() {
	
		$this->db->order_by("state","ASC");
		$this->db->select();
		$query = $this->db->get('uxi_states_list');
		$result_back = array();
		foreach ($query->result() as $row) {
			$result_back[] = $row;
		}
        return $result_back;
    }
	
    function get_cities($state='') {
        
        if($state!=''){$this->db->where('state_id', $state);}
		$this->db->order_by("city","ASC");
		$this->db->select();
        $query = $this->db->get('uxi_cities_list');
		$result_back = array();	
		foreach ($query->result() as $row) {
			$result_back[] = $row->city;
		}
        return $result_back;
    }
	
	function insertData($table, $data) {
        $this->db->insert($table, $data);
        $inserted_id = $this->db->insert_id();
        return $inserted_id;
	}
	
	function updateData($table, $data, $whereField, $whereValue) {
	
		$this->db->where($whereField, $whereValue);
		$this->db->update($table, $data);
        if($this->db->affected_rows()>0) {
			return true;
		}else {
			return false;
		}
	}
	
	function deleteData($table, $data, $whereField, $whereValue) {
	
		$this->db->where($whereField, $whereValue);
		$this->db->delete($table, $data);
        if($this->db->affected_rows()>0) {
			return true;
		}else {
			return false;
		}
	}	

}

?>
