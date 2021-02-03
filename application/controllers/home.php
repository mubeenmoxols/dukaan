<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function home(){
		$this->load->model('MainModel');
		$data['categories'] = $this->MainModel->getCategories();
		$this->load->view('home',$data);
	}

	
}