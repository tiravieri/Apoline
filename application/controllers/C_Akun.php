<?php
// class C_login extends CI_Controller {

// 	public function __construct(){
// 		parent::__construct();
// 		$this->load->helper('url');
// 	}

// 	public function index()
// 	{
// 		$header['url'] = "LOGIN";

// 		$this->load->view('nav',$header);
// 		$this->load->view('LOGIN');
// 		$this->load->view('footer');

// 	}

	class C_Akun extends CI_Controller
	{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Akun');
    }


    public function index()
    {
        $data = array(
            'tittle' => 'Login To Apoline',
            'filename' => 'LOGIN'
        );
        $this->load->view('LOGIN',$data);
    }

    public function check(){
        $data = $this->input->post(null,TRUE);
        $login_data = $this->M_Akun->check_user($data);
        if($login_data){
            $this->session->set_userdata('username',$login_data->username);
            redirect('C_Home/index');
        } else {
            $this->session->set_flashdata('message','Gagal Login');
            redirect('C_Akun/index');
        }
    }

    public function daftar_view()
    {
        $this->load->view('DAFTAR');
    }

    public function daftar_akun()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->M_Akun->daftar_akun($data);
        if($insert){
            $this -> session -> set_flashdata('alert','sukses_daftar');
            redirect('C_Akun/index');
        }else{
            echo "<script type='text/javascript'> alert('gagal daftar akun');</script>";
        }
    }

    public function add(){

    	$nama = $this->input->post('nama');
    	$user = $this->input->post('username');
    	$pass = $this->input->post('password');
    	$email = $this->input->post('email');
    	$alamat = $this->input->post('alamat');

    	$data = array(
    		"nama"=>$nama,
            "Username"=>$user,
            "Password"=>$pass,
            "Email"=>$email,
            "Alamat"=>$alamat          
            
    	);
    	$this->M_Akun->insert($data,'member');
    	
    	redirect('C_Akun/index');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('C_Akun/index');
    }

	
}
?>