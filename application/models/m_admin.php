<?php 
Class M_admin extends CI_Model{
	
	 public function check_user($data)
    {
            $this->db->where('user', $data['username']);
            $this->db->where('pass', $data['password']);
 
            $query = $this->db->get('admin');

            if($query->num_rows()== 1) {
                return $query->row(0);
            } else {
                return FALSE;
            }
    }
	
	public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }
	
	public function insert1($data)

  {
    $this->db->insert('obat', $data);

  }
	
	function get_insert($data){
		$tabel = 'obat';

       $this->db->insert($tabel, $data);
       return TRUE;
    }

	
	 public function input($data){
    try{
      $this->db->insert('obat', $data);
      return true;
    }catch(Exception $e){
    }
  }

	
	
	function updatee($data){  
  		$tabel = 'obat'; 
      $lolo = array (
            "id_obat"=>$data['id'],
            "nama_obat"=>$data['nama'],
            "harga"=>$data['harga'],
            "keterangan"=>$data['ket'],
            "cara"=>$data['cara'],
            "efek"=>$data['efek'],
		  	"penyajian"=>$data['penyajian'],
		  	"indikasi"=>$data['indikasi'],
        );  
        $this->db->where('id_obat', $data['id']);
        $update = $this->db->update($tabel,$lolo); 
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
 	}
	
	
	public function upload($data){
    
      $this->db->set('image',$data);
      $this->db->where('nama_obat',$nama);
      $this->db->update('obat');
      return true;
  }
	
}

?>