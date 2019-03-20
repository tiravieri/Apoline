<?php 

Class C_Home extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('text');
        $this->load->helper('url');
    }   
	public function index()
	{
    // $data['apoline']  = $this->Index_model->getDB();
		$this->load->view('BERANDA');
    }
}
?>