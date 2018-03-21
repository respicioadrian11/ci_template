<?php
	class Feed extends CI_Controller{
		public function index(){
			$this->load->view('header1');
			$this->load->view('feed');
			$this->load->view('modal');
			$this->load->view('footer1');
		}
		public function addPost(){
			$post 	= $this->input->post("post");
			$user 	= $this->session->userdata('username');
			$image 	=$this->session->userdata('image');
			$postID =$this->input->post('postID');

			$return['message'] = "Oops something went wrong!";
			$return['type']		 = "error";
			$return['status']	 = 0;

			if($post == "" ){
				$return['message'] = "You Post is Empty";
			}else{
				$this->load->model('feedModel');
				$data=[$user,$post,$image];
				$this->feedModel->addPost($data);
				$return['message'] = "Post Created!";
				$return['status']	 = 1;
				$return['type'] = "success";

			}
			echo json_encode($return);
	}

	public function del(){
		$u=$this->uri->segment(3);
		$this->load->model('feedModel');
		$this->feedModel->del($u);
		redirect('feed');
	}

	public function viewPost(){
		$id = $this->uri->segment(3);
		$data = null;
		$this->load->model('feedModel');
		$result = $this->feedModel->viewPost($id);
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		
}