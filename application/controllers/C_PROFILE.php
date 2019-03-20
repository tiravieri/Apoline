<?php
class C_PROFILE extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Profile');
		$this->load->helper('url','form');
	}
    public function index()
    {
        $data = array(
            'title' => 'Data member',
            'mmbr' => $this->M_Profile->get_data()
        );
        $this->load->view('YOUR-PROFILE',$data);
    } 

    public function Profile()
    {
        $this->load->view('YOUR-PROFILE');
    }

    public function Ganti_Foto()
    {
		$this->load->view('PROFILE-GANTIFOTO');
    }
    public function Akun_Setting()
    {
        $this->load->view('PROFILE-PENGATURANPROFILE');
    }


//     public function edit_member($username){
//         $where = array('username' => $username);
//         $data['member'] = $this->M_Profile->edit_member($where,'member')->result();
//         $this->load->view('PROFILE-PENGATURANPROFILE',$data);
// }

	public function update() {
        $data = $this->input->post(null,TRUE);
        $edit = $this->M_Profile->updatee($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('C_PROFILE/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }



    public function tambah(){
    $config = [
        'upload_path' => './gambar',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto')) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('PROFILE-GANTIFOTO', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = $file['file_name'];
          $this->M_Profile->upload($data); //memasukan data ke database
          redirect('C_PROFILE/index'); //mengalihkan halaman

      }
  }
}