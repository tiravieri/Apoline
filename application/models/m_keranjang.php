<?php 

/* 1301160464 */
	Class M_keranjang extends CI_Model
	{
		public function delete($id)
	{
		$this->db->where('id_beli',$id);
		$this->db->delete('keranjang');
	}
	}
	
?>