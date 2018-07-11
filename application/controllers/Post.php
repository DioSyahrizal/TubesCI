<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
//main page
    public function noLogin(){
        $this->load->helper('text');
        
        $this->load->model('post_model');
		$data['review']=$this->post_model->getReviewQueryObject();
		$this->load->view('index', $data);
        
    }

    public function index()
    {
        if ($this->session->userdata('logged in')) {
            $session_data = $this->session->userdata('logged in');
            $data['username'] = $session_data['username'];
            $id=$session_data['id'];
                $this->load->model('user');
                $tampil['list_user']=$this->user->getUser($id);
                $this->load->model('post_model');
		        $tampil['review']=$this->post_model->getReviewQueryObject();
                $this->load->view('index',$tampil);
            }else{
                redirect('Post/noLogin','refresh');
            }
        
        
    }

    public function review($no){
        if ($this->session->userdata('logged in')) {
            $session_data = $this->session->userdata('logged in');
            $data['username'] = $session_data['username'];
            $id=$session_data['id'];
                $this->load->model('user');
                $tampil['list_user']=$this->user->getUser($id);
                $this->load->model('post_model');
                $tampil['isi']=$this->post_model->getReview($no);
                $tampil['review']=$this->post_model->getReviewQueryObject();
                $this->load->view('review',$tampil);
            }else{
                redirect('login','refresh');
            }
        
    }

    //admin page
    public function userhome(){
        if ($this->session->userdata('logged in')) {
            $session_data = $this->session->userdata('logged in');
            $data['username'] = $session_data['username'];
            $id=$session_data['id'];
                $this->load->model('user');
                $tampil['list_user']=$this->user->getUser($id);
                $this->load->view('user/home',$tampil);
            }  
    }

    //review
    public function tabel(){
        if ($this->session->userdata('logged in')) {
            $session_data = $this->session->userdata('logged in');
            $data['username'] = $session_data['username'];
            $id=$session_data['id'];
                $this->load->model('user');
                $tampil['isitabel']=$this->user->getUser($id);
                $this->load->view('user/tabel',$tampil);
            }  
        
        
    }

    public function tambahreview(){
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->view('user/tambahreview');
    }

    public function createreview(){
        $this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul','Judul','trim|required');
	
        $this->load->model('post_model');
        if($this->form_validation->run() == FALSE) {
			$this->load->view('user/tambahreview');
		} else {
			$config['upload_path'] = './assets/image/review/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '9000000000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
			}
			else{
				//$data = array('upload_data' => $this->upload->data());
				$this->post_model->insertReview();
				$this->load->view('user/review_sukses');
			}
		}

    }

    public function updateReview($id){
        $this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul','Judul','trim|required');
	
        $this->load->model('post_model');
        $isi['review']=$this->post_model->getReview($id);
        
        if($this->form_validation->run() == FALSE) {
			$this->load->view('user/updatereview',$isi);
		} else {
				//$data = array('upload_data' => $this->upload->data());
				$this->post_model->updateReview($id);
				$this->load->view('user/review_sukses');
			}
		

    }

    public function deleteReview($id){
        $this->load->model('post_model');
		$this->post_model->deleteReview($id);
		$this->load->view('user/review_sukses');
	}


    public function data_server($id){
        $this->load->library('Datatables');
		$this->datatables
            ->select('id,id_user,author,judul,waktu,post,foto')
            ->from('review')
            ->where('id_user',$id);
			echo $this->datatables->generate();
    }

}

/* End of file Controllername.php */

?>