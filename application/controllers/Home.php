<?php
	class Home extends CI_Controller{

		public function index(){

			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('modal');
			$this->load->view('footer');
		}
		
		public function register(){

			$config = array(
			'upload_path' => "/assets/images/",
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
		#INITIALIZE POSTED DATA
		$name    	= $this->input->post("name");
		$address    = $this->input->post("address");
		$birthday   = $this->input->post("birthday");
		$gender   	= $this->input->post("gender");
		$username   =$this->input->post("username");
		$password 	= $this->input->post("password");
		$userfile 	= ($image);
		$userID 	= $this->input->post("userID");
		#DEFAULT MESSAGE
		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = 0;

		#CHCKING REQUIRED DATA
		if ($name == "") {
			$return['message'] = " Name is required!";
		}
		elseif ($address  == "") {
			$return['message'] = "address is required!";
		}
		elseif ($birthday =="") {
			$return['message'] = "birthday is required!";
		}
		elseif ($gender == "") {
			$return['message'] = "gender is required!";
		}
		elseif ($username =="") {
			$return['message'] = "username is required!";
		}
		elseif ($password == "") {
			$return['message'] = "password is required!";
		}
		else{
			$this->load->model('homeModel');

			#CHECK IF PRODUCT ALREADY EXIST
			$result = $this->homeModel->checkUser($username, $userID);
			if ($result->num_rows() > 0) {
				$return['message'] = "Username already exist!";
			}
			else{
				$data = [$name, $address, $birthday, $gender, $username, $password,$userfile];

					$this->homeModel->register($data);
					$return['message'] = "Account successfully Created!";
					$return['status']	 = 1;
					$return['type'] = "success";
			}
		}


		echo json_encode($return);
	}

public function userlogin(){
		$username	=$this->input->post("username");
		$password	=$this->input->post("password");
		

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = [];

		if($username==""){
			$return['message'] = "Username is Required!";
		}
		elseif($password==""){
			$return['message'] = "Password is Required!";
		}else{

			//model function
			$this->load->model('homeModel');
			if($this->homeModel->userlogin($username, $password)){
				$return['message']="WELCOME $username";
				$return['type']= "success";
				$return['status'] = 1;
				

			}else{
				$return['message']="invalid username or password!";
				
			}
		}
			echo json_encode($return);
	}	

}