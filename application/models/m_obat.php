<?php 

/* 1301160464 */
	Class M_obat extends CI_Model
	{
		public function getObat($limit,$start){
			$query = $this->db->get('obat',$limit, $start);
			return $query->result_array();
		}
		
		function getObat2(){
			$query = $this->db->get('obat');
			return $query->result_array();
		}
		
		public function getKeranjang()
		{
			$data = $this->session->userdata('username');
			$this->db->where('username',$data);
			$query = $this->db->get('keranjang');
			return $query->result_array();
		}
		
		public function getInfoObat($id)
		{
			
			$this->db->where('id_obat',$id);
			$query = $this->db->get('obat');
			return $query->row_array();
		}
		
		
		public function delete($id)
	{
		$this->db->where('id_obat',$id);
		$this->db->delete('obat');
	}
	
	public function insert2($data,$table)
    {
        return $this->db->insert($table,$data);
    }
		
	
		public function insert($data,$table)
    {
        
		
		$insert = $this->db->insert($table, $data);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	}
?>