<?php
	class HomeModel extends CI_Model{
		public function register($data){
			$query="INSERT INTO users (name,address,birthday,gender,email,password,image)VALUES(?,?,?,?,?,?,?)";
			return $this->db->query($query, $data);
		}

		 public function checkUser($username, $userID){
    		$where  = "";
    		$data[] = $username;
    		if(is_numeric($userID)){
      		$where  = "AND id != ?";
      		$data[] = $userID;
    	}
    		$query = "SELECT * FROM users WHERE email = ? $where";
    				return $this->db->query($query, $data);
  	}

		public function userlogin($username, $password){
			$this->db->where('email',$username);			//LOGIN ADMIN
			$this->db->where('password',$password);
			$query= $this->db->get('users');			


				if($query->num_rows()>0)
				{
				$userdata = array(
						'user_id'=>$query->row(0)->id,
						'name'=>$query->row(0)->name,			//ADMIN LOGIN SESSION
						'address'=>$query->row(0)->address,
						'birthday'=>$query->row(0)->birthday,
						'gender'=>$query->row(0)->gender,			//ADMIN LOGIN SESSION
						'image'=>$query->row(0)->image,
						'username'=>$username,
						'password'=>$password,
						'logged_in'=>TRUE
				);
				$this->session->set_userdata($userdata);
						return true;
				}else{
					return false;
				}
					echo json_encode($data);
			
			
		} 		 


		public function editProfile($username, $data){
			$query="UPDATE users SET name = ?, address = ?, birthday = ?, gender = ?, email = ?, image = ? WHERE email = '$username'";
			return $this->db->query($query, $data);
		}

		public function getUsers(){
			$user = $this->session->userdata('username');
			$query="SELECT * FROM users WHERE email = '$user'";
			return $this->db->query($query);
		}
    		
}