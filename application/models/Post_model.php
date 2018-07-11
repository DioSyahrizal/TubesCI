<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function insertReview(){
		$object = array('id_user'=>$this->input->post('id_user'),
						'author'=>$this->input->post('author'),
                        'judul'=>$this->input->post('judul'),
                        'waktu'=>$this->input->post('waktu'),
                        'post'=>$this->input->post('post'),
                        'foto'=>$this->upload->data('file_name')
			);
		$this->db->insert('review',$object);
    }

    public function updateReview($id){
		$data = array('id_user'=>$this->input->post('id_user'),
						'author'=>$this->input->post('author'),
                        'judul'=>$this->input->post('judul'),
                        'waktu'=>$this->input->post('waktu'),
                        'post'=>$this->input->post('post')
                        // 'foto'=>$this->upload->data('file_name')
			);
            $this->db->where('id',$id);
            $this->db->update('review',$data);
    }

    public function deleteReview($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('review');
	}
    
    public function getReview($id){
        $this->db->where('id',$id);
		$query = $this->db->get('review');
		return $query->result();
    }

    public function getReviewQueryObject(){
        $query = $this->db->query("SELECT * from review");
		return $query->result();
    }

   

}

/* End of file Post_model.php */

?> 