<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	//	$this->load->model('pegawai_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}


    public function index()
    {
        $this->load->view('login');
                
    }

    public function cekLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDB');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('login');
		}else{
			redirect('Post','refresh');
		}
	}
	public function cekDB($password){
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array (
					'id'=>$row->id,
					'username'=>$row->username,
					'nama'=>$row->nama
				);
				$this->session->set_userdata('logged in', $sess_array );
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDB',"Login gagal Username Password tak valid");
			return false;
		}
	}
    
	public function daftar(){
		$this->load->view('daftar');
	}

	public function logout(){
		$this->session->unset_userdata('logged in');
		$this->session->sess_destroy();
		redirect('post/nologin','refresh');
	}


	public function tambahUser(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->view('daftar');
	}

	public function Create(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
	
        $this->load->model('user');
        if($this->form_validation->run() == FALSE) {
			$this->load->view('daftar');
		} else {
			$config['upload_path'] = './assets/image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				//$data = array('upload_data' => $this->upload->data());
				$this->user->insertUser();
				$this->load->view('daftar_sukses');
			}
		}

	}

	public function Update($id){
		$this->form_validation->set_rules('username','Username','trim|required');
		
		$this->load->model('user');
		$tampil['list_user']=$this->user->getUser($id);
        if($this->form_validation->run() == FALSE) {
			$this->load->view('update',$tampil);
		} else {
			$config['upload_path'] = './assets/image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000000000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				//$data = array('upload_data' => $this->upload->data());
				$this->user->updateUser($id);
				$this->load->view('update_sukses');
			}
		}
	}

}

/* End of file Login.php */

?>