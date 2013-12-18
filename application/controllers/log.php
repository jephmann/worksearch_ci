<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {        
    
    public function index()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');

        $data['topic']      = 'Log';
        $data['subtopic']   = 'Select';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/table', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function create()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');

        $data['topic']      = 'Log';
        $data['subtopic']   = 'Create';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');

        $data['topic']      = 'Log';
        $data['subtopic']   = 'Detail';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');

        $data['topic']      = 'Log';
        $data['subtopic']   = 'Update';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');

        $data['topic']      = 'Log';
        $data['subtopic']   = 'Delete';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/delete', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
}
/* End of file log.php */
/* Location: ./application/controllers/log.php */