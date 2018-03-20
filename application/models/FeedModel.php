<?php
	class FeedModel extends CI_Model{
		Public function addPost($data){
			$query="INSERT INTO post (user,post,image)VALUES(?,?,?)";
			return $this->db->query($query, $data);
		}
		
	}