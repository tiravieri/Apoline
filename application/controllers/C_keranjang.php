<?php 
/* 1301160464 */
Class C_keranjang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->helper('url','form');
		$this->load->model('m_keranjang');
	}
	
	function index(){
		$header['url']="keranjang";
		
		
		$data = array(
            'title' => 'Data member',
            'ker' => $this->m_obat->getKeranjang()
        );

        $this->load->view('keranjang',$data);
		$this->load->view('footer');
	}
	
	public function del(){
		$data = $this->input->post(null,TRUE);
		$this->m_keranjang->delete($data['idbeli']);
		redirect('C_keranjang/index');
	}
	
	
}

?>