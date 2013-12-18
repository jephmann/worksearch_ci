<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
        
    
    public function index()
    {
        $this->load->model('Profile_model');
        $this->load->helper('url');

        $data['topic']      = 'Profile';
        $data['subtopic']   = 'Select';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/table', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function create()
    {
        $this->load->model('Profile_model');
        $this->load->helper('url');

        $data['topic']      = 'Profile';
        $data['subtopic']   = 'Create';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail()
    {
        $this->load->model('Profile_model');
        $this->load->helper('url');

        $data['topic']      = 'Profile';
        $data['subtopic']   = 'Detail';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update()
    {
        $this->load->model('Profile_model');
        $this->load->helper('url');

        $data['topic']      = 'Profile';
        $data['subtopic']   = 'Update';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/udpate', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete()
    {
        $this->load->model('Profile_model');
        $this->load->helper('url');

        $data['topic']      = 'Profile';
        $data['subtopic']   = 'Delete';
        $data['nav_li']     = '<li>Navigation To Be Determined</li>';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/delete', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
}
/* End of file profile.php */
/* Location: ./application/controllers/profile.php */