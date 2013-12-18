<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {        
    
    public function index()
    {
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = 'Contact';
        $data['subtopic']   = 'Select';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/table', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function create()
    {
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = 'Contact';
        $data['subtopic']   = 'Create';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail()
    {
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = 'Contact';
        $data['subtopic']   = 'Detail';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update()
    {
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = 'Contact';
        $data['subtopic']   = 'Update';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete()
    {
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = 'Contact';
        $data['subtopic']   = 'Delete';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/delete', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
}
/* End of file contact.php */
/* Location: ./application/controllers/contact.php */