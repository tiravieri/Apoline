<?php
Class Index_model extends CI_Model
{
	public function getDB(){
    
		$query = $this->db->get('apoline');
		return $query->result_array();
	}
 
  public function per_id($id)
  {
    $this->db->where('id_event',$id);
    $query=$this->db->get('apoline');
    return $query->result();
  }
}