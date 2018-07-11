<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function login($username,$password){
		$this->db->select('id,username,password,nama');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query=$this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function insertUser(){
		$object = array('username'=>$this->input->post('username'),
						'password'=>MD5($this->input->post('password')),
                        'email'=>$this->input->post('email'),
                        'nama'=>$this->input->post('nama'),
                        'alamat'=>$this->input->post('alamat'),
                        'foto'=>$this->upload->data('file_name')
			);
		$this->db->insert('user',$object);
	}	

	public function updateUser($id){
		$data = array(
			'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'foto'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}

	public function getUser($id){
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->result();
	}



}

/* End of file User.php */

?>