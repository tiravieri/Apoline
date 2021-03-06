<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class M_Akun extends CI_Model
{
    public function daftar_akun($data)
    {
        $param = array(
            "nama"=>$data['nama'],
            "username"=>$data['username'],
            "password"=>$data['password'],
            "email"=>$data['email'],
            "alamat"=>$data['alamat'],          
            "foto"=>$data['foto']
        );
        $insert = $this->db->insert('member', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }

    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('member');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }

    public function check_user($data)
    {
            $this->db->where('username', $data['username']);
            $this->db->where('password', $data['password']);
 
            $query = $this->db->get('member');

            if($query->num_rows()== 1) {
                return $query->row(0);
            } else {
                return FALSE;
            }
    }
}