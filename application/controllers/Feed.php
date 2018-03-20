<?php
	class Feed extends CI_Controller{
		public function index(){
			$this->load->view('header1');
			$this->load->view('feed');
			$this->load->view('modal');
			$this->load->view('footer1');
		}
	}