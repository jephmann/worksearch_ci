<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
        
    
	public function index()
	{
            $this->load->helper('url');
            
            $this->load->view('templates/head');
            $this->load->view('templates/header');
            $this->load->view('test');
            $this->load->view('templates/footer');
            $this->load->view('templates/foot');
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */