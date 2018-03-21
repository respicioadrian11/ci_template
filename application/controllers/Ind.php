<?php
	class Ind extends CI_Controller{
		public function index(){
			$this->load->view('header1');
			$this->load->view('index');
			$this->load->view('footer1');
		}

		public function editProfile(){
			$config = array(
			'upload_path' => "assets/images/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"
			);
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('userfile')){
				$errors = array('error' => $this->upload->display_errors());
				$image='noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$image= $_FILES['userfile']['name'];
			}

			$name 		= $this->input->post("name");
			$address 	= $this->input->post("address"); 
			$birthday 	= $this->input->post("birthday");
			$gender 	= $this->input->post("gender");
			$username 	= $this->input->post("username");
			$password  	= $this->input->post("password");
			$userfile	= $image;

			$return['message'] = "Oops something went wrong!";
			$return['type']		 = "error";
			$return['status']	 = 0;

			if($name == ""){
				$return['message'] = "Usename is Required!";
			}elseif($address == ""){
				$return['message'] = "Address is Required!";
			}elseif($birthday == ""){
				$return['message'] = "BirthDate is Required!";
			}elseif($gender == ""){
				$return['message'] = "Gender is Required!";
			}elseif($username == ""){
				$return['message'] = "Username is Required!";
			}elseif($password == ""){
				$return['message'] = "Password is Required!";
			}else{
				$this->load->model('homeMOdel');
				$checkpass = $this->session->userdata('password');
				if($password != $checkpass){
					$return['message'] = "Password Does Not Match!";
				}else{
					$data = [$name, $address, $birthday, $gender, $username, $userfile];
					$result = $this->homeModel->editProfile($username, $data);
					$return['message'] = "Account successfully Updated! Log Out To see Changes";
					$return['status']	 = 1;
					$return['type'] = "success";


				}
			}
			echo json_encode($return);

		}

		public function getUsers(){
		$data = null;
		$this->load->model('homeModel');
		$result = $this->homeModel->getUsers();
		if ($result->num_rows() > 0) {
			$data = $result->result_array();
		}
		echo json_encode($data);
	}

		public function enter(){
		if($this->session->userdata('username') != '')
			{
				redirect(base_url().'feed');	
		}else{
			redirect('home');
		}
	}
//LOGOUT
	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('address');
		$this->session->unset_userdata('birthday');
		$this->session->unset_userdata('gender');
		$this->session->unset_userdata('image');
		redirect('home');
	}
}
