<?php

	class About extends CI_Controller{

		public function index(){

			$this->load->view('header');
			$this->load->view('about');
			$this->load->view('modal');
			$this->load->view('footer');
		}

		public function contact(){
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('modal');
			$this->load->view('footer');
		}
	}