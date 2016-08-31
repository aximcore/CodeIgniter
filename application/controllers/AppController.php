<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'html','url'));
		$this->load->library('form_validation');
	}

	public function index($page = 'index')
	{
		if(!file_exists(APPPATH.'views/'.$page.'.php')){
			show_404();
		}

		$this->load->view('common/header');
		$this->load->view('index');
		$this->load->view('common/footer');

	}
}
