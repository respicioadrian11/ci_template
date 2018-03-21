<?php
	class FeedModel extends CI_Model{

		Public function addPost($data){
			$query="INSERT INTO post (user,post,image)VALUES(?,?,?)";
			return $this->db->query($query, $data);
		}
		public function del($u){
    		$this->db->delete('post',array('id' => $u));
        	return;
    		
  	}
  		public function viewPost($id){
  			$query="SELECT * FROM post WHERE id = ?";
  			return $this->db->query($query,$id);
  		}
}