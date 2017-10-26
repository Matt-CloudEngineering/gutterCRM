<?php

class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Custies_model');
                $this->load->helper('url_helper');
                $this->load->helper('html');
                $this->load->helper('Authit');

        }

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['log_meth']='auth/login';
        $data['login']='Login';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}
?>