<?php 
/* 1301160464 */
Class C_produk extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('m_obat');
		$this->load->helper('url');
		$this->load->model('M_Profile');
	}
	
	function index(){
		
		$header['url']="produk";
		
		
		//konfigurasi pagination
        $config['base_url'] = site_url('C_produk/index'); //site url
        $config['total_rows'] = $this->db->count_all('obat'); //total row
        $config['per_page'] = 12;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
		
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		
		
		 $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function getobat yang ada pada model. 
        $data['obat'] = $this->m_obat->getObat($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
		$this->load->view('nav_login',$header);
        $this->load->view('produk',$data);
		$this->load->view('footer');
		
		//$data['obat'] = $this->m_obat->getObat();
		//$this->load->view('produk',$data);
	}
	
	public function getinfo($id){
		
		$header['url']="detil";
		
		
		
		
		 
		$dpthasil = $this->m_obat->getInfoObat($id);
		if ($dpthasil)
		{
			$data['obat'] = $dpthasil;
		}
		
		$cari = $this->M_Profile->getMem();
		if ($cari)
		{
			$data['member'] = $cari;
		}
		 
		$this->load->view('detil',$data); 
				
		//$data['obat'] = $this->m_obat->getInfoObat($id);
		$this->load->view('nav_login',$header);
		//$this->load->view('detil',$data);
		$this->load->view('footer');
	}
	
	function reqobat(){
		$nama = $this->input->post('namaobat');
		$user = $this->session->userdata('username');
		
		$data = array(
    		"nama"=>$user,
            "nama_obat"=>$nama         
            
    	);
		$insert = $this->m_obat->insert($data,'request');
		if($insert){
            $this -> session -> set_flashdata('alert','Berhasil Request');
            redirect('C_produk/index');
        }
	}
	
	function tambah(){
		$header['url']="detil";
		$user = $this->session->userdata('username');
		$nama=$this->input->post('namaobat');
		$harga=$this->input->post('harga');
		$jum=$this->input->post('jumlah');
		$alamat=$this->input->post('alamat');
		$tot = $this->input->post('jumlah') * $this->input->post('harga');
		
		$data = array(
			"username"=>$user,
    		"nama_obat"=>$nama,
            "harga"=>$harga,
            "jumlah"=>$jum,
            "alamat"=>$alamat,
            "total"=>$tot  
    	);
		$this->m_obat->insert2($data,'keranjang');
		
		redirect('C_keranjang/index');
	}
	
}

?>