<?php 
/**
 * 
 */
 class Contact extends CI_Controller
 {
 	public function index(){
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('modal');
			$this->load->view('footer');
		}
 } 