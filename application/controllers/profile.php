<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    var $topic = 'Profile';
    var $model = 'Profile_model';
    
    public function index()
    {
        $this->load->model($this->model);
        $this->load->helper('url');
        $this->load->library('table');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Select';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $profiles           = $this->Profile_model->select_all();        
        $data['table']      = $this->table->generate($profiles);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/table', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function create()
    {
        $this->load->model($this->model);
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Create';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail($id_user)
    {
        $this->load->model($this->model);
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Detail';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $detail = $this->Profile_model->detail($id_user);
        $data['profile_name'] = $detail['name_first'] . ' ' . $detail['name_last'];
        // TODO: keep going
        
        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update()
    {
        $this->load->model($this->model);
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Update';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('profile/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete($id)
    {
        $this->load->model($this->model);
        $this->load->helper('url');
        $this->load->helper('form');
        
        $data['profile_id']     = $this->uri->segment(3);
        $data['topic']          = $this->topic;
        $data['subtopic']       = 'Delete';
        $data['loginout']       = 'to-do';
        $data['session_whose']  = 'too-doo';        
        
        // TODO: Rethink Flow re Profile
        if ($this->input->post('delete_no'))
        {
            // RETURN TO THE DETAIL PAGE
            redirect("profile/detail/{$data['profile_id']}");
        }
        elseif ($this->input->post('delete_yes'))
        {
            // DELETE THE RECORD; RETURN TO INDEX
            $this->Log_model->delete($data['profile_id']);
            redirect("profile/");
        }
        else
        {
            // LOAD THE DELETE PAGE
            // TODO: Consolidate Delete View
            $this->load->view('templates/head', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/aside', $data);
            $this->load->view('profile/delete', $data);
            $this->load->view('templates/footer', $data);
            $this->load->view('templates/foot', $data);          
        } 
    }
}
/* End of file profile.php */
/* Location: ./application/controllers/profile.php */