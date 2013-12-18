<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {        
    
    public function index()
    {
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = 'Company';
        $data['subtopic']   = 'Select';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/table', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function create()
    {
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = 'Company';
        $data['subtopic']   = 'Create';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail()
    {
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = 'Company';
        $data['subtopic']   = 'Detail';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update()
    {
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = 'Company';
        $data['subtopic']   = 'Update';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete()
    {
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = 'Company';
        $data['subtopic']   = 'Delete';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/delete', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
}
/* End of file company.php */
/* Location: ./application/controllers/company.php */