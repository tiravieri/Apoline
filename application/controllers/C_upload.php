<?php 
class C_upload extends CI_Controller{
	public function __construct(){
	parent::__construct();
	$this->load->helper(array(‘url’));
}

public function simpansiswa()
{
	$this->load->library(‘upload’);
	$nmfile = “file_”.time();
	$config[‘upload_path’] = ‘./image’;
	$config[‘allowed_types’] = ‘gif|jpg|png|jpeg|bmp’; 
	$config[‘file_name’] = $nmfile; 
	$this->upload->initialize($config);
	$nama = $this->input->post(‘nama’);
	$harga = $this->input->post(‘harga’);
	$ket = $this->input->post(‘ket’);
	
	
	if(!empty($_FILES) && $_FILES[‘foto’][‘name’] > 0 && $_FILES[‘foto’][‘error’] == 0)
	{
	if ($this->upload->do_upload(‘foto’))
	{
	$gbr = $this->upload->data();
	$data = $gbr[‘file_name’];
	$query = “INSERT INTO obat (
	id_obat,nama_obat,harga,
	keterangan,image
	)VALUES
	(‘”.$nama.”‘,'”.$NIS.”‘,
	‘”.$siswa_nama.”‘,'”.$gender.”‘,
	‘”.$siswa_alamat.”‘,'”.$siswa_kontak.”‘,
	‘”.$data.”‘) “;
	$simpandatasiswa = $this->db->query($query);
	$this->session->set_flashdata(‘Sukses’, ”
	× Data Pengguna Berhasil Diubah.
	“);
	redirect(‘master/siswa’); 
	}else{
	$this->session->set_flashdata(‘Sukses’, ”
	× Data Pengguna Berhasil Diubah.
	“);
	redirect(‘master/siswa/tambah’); 
	}
	}else{
	$querysimpantanpafoto = “INSERT INTO siswa (
	siswa_id,NIS,siswa_nama,
	gender,siswa_alamat,
	siswa_kontak,foto
	)VALUES
	(‘”.$siswa_kode.”‘,'”.$NIS.”‘,
	‘”.$siswa_nama.”‘,'”.$gender.”‘,
	‘”.$siswa_alamat.”‘,'”.$siswa_kontak.”‘,
	”) “;
	$simpandatasiswatanpafoto = $this->db->query($querysimpantanpafoto);
	if ($simpandatasiswatanpafoto) {
	$this->session->set_flashdata(‘Sukses’, ”
	× Data Pengguna Berhasil Diubah.
	“);
	redirect(‘master/siswa’); 
	}else{
	$this->session->set_flashdata(‘Sukses’, ”
	× Data Pengguna Berhasil Diubah.
	“);
	redirect(‘master/siswa/tambah’); 
	}
	}
	}
}

?>
