<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    
    var $topic = 'Test';        
    
    public function index()
    {
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Subtest';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('test', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */