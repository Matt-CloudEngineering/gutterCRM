<?php

class boots extends CI_Controller
{

	public function __construct()
	{
	        parent::__construct();
	        $this->load->model('Custies_model');
	        $this->load->helper('url_helper');
	        $this->load->helper('html');

	}
	public function getBoots()
	{

	$this->load->helper('form');
	$this->load->library('form_validation');
		
	$this->load->view('logonav');
	}

}

?>