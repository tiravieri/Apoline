<?php 
/* 1301160464 */
Class C_Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_admin');
		$this->load->library(array('form_validation', 'session'));
	}
	
	function index(){
		$data['obat'] = $this->m_obat->getObat2();
		$this->load->view('admin',$data);
	}
	
	function tambah(){
		
		$this->load->view('insert');
	}
	
	public function check(){
        $data = $this->input->post(null,TRUE);
        $login_data = $this->m_admin->check_user($data);
        if($login_data){
            $this->session->set_userdata('user',$login_data->username);
            redirect('C_admin/index');
        } else {
            $this->session->set_flashdata('message','Gagal Login');
            redirect('C_Akun/index');
        }
    }
	
	public function add(){
    
		$nama=$this->input->post('nama');
		$harga=$this->input->post('harga');
		$ket=$this->input->post('ket');
		$cara=$this->input->post('cara');
		$efek=$this->input->post('efek');
		$penyajian=$this->input->post('penyajian');
		$indikasi=$this->input->post('indikasi');
		

		 $config = [
        'upload_path' => './image',
        'allowed_types' => 'gif|jpg|png'
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('PROFILE-GANTIFOTO', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $foto = $file['file_name'];
		  
		  $data = array(
    		"nama_obat"=>$nama,
            "harga"=>$harga,
            "keterangan"=>$ket,
            "cara"=>$cara,
            "efek"=>$efek,
            "penyajian"=>$penyajian,
            "indikasi"=>$indikasi,
            "image" =>$foto   
            
    	);
    	$this->m_admin->insert($data,'obat');
    	
          redirect('C_admin/index'); //mengalihkan halaman

      }
  }
		
		
	

	
	
	public function update() {
        $data = $this->input->post(null,TRUE);
        $edit = $this->m_admin->updatee($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('C_admin/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }
	
	public function del(){
		$data = $this->input->post(null,TRUE);
		$this->m_obat->delete($data['idobat']);
		redirect('C_admin/index');
	}
	
}

?>