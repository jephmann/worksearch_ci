<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {
    
    var $topic = 'Logs';
    var $model = 'Log_model';
    
    private function recruit_this($recruiter)
    {
        $which  = NULL;
        $color  = NULL;
        $result = NULL;        
        if(!empty($recruiter))
        {
            $color  = 'crimson';
            $which  = 'YES';
        }
        else
        {
            $color  = 'green';
            $which  = 'NO';
        }
        if ((!empty($color)) && (!empty($which)))
        {
            $result = "<span style=\"color: {$color};\">{$which}</span>";
        }
        return $result;
    }
    
    private function phone_this($phone, $extension)
    {
        $result = NULL;
        if(!empty($phone))
        {
            $area_code  = substr($phone, 0, 3);
            $prefix     = substr($phone, 3, 3);
            $suffix     = substr($phone, 6, 4);
            $result     = "({$area_code}) {$prefix}-{$suffix}";
            if(!empty($extension))
            {
                $result .= " x{$extension}";
            }
        }        
        return $result;
    }
    
    private function zip_this($zip5, $zip4)
    {
        $result = NULL;
        if(!empty($zip5))
        {
            $result = $zip5;
            if(!empty($zip4))
            {
                $result .= "-{$zip4}";
            }
        }        
        return $result;
    }
    
    private function csz_this($city, $state, $zip)
    {
        $result = NULL;
        
        if(!empty($city))
        {
            $result .= "{$city}, ";
        }
        if(!empty($state))
        {
            $result .= $state;
        }
        if(!empty($zip))
        {
            $result .= " {$zip}";
        }
        
        return $result;
    }
    
    private function name_this($first, $middle, $last)
    {
        $result = NULL;        
        if(!empty($last))
        {
            $result = $last;
            if (!empty($middle))
            {
                $result = "{$middle} {$result}";
            }
            if (!empty($first))
            {
                $result = "{$first} {$result}";
            }                
        }
        return $result;
    }
    
    private function address_this($building, $street, $unit, $csz)
    {
        $result = NULL;
        if(!empty($building))
        {
            $result .= "{$building}<br />";
        }
        if(!empty($street))
        {
            $result .= "{$street}<br />";
        }
        if(!empty($unit))
        {
            $result .= "{$unit}<br />";
        }
        if(!empty($csz))
        {
            $result .= "{$csz}";
        }
        return $result;
    }
    
    public function index()
    {
        $this->load->model('Log_model');
        $this->load->helper('url');
        $this->load->library('table');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Select';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $logs               = $this->Log_model->select_all();        
        $data['table']      = $this->table->generate($logs);
        
        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/table', $data);
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
        $this->load->view('log/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail($id)
    {
        $this->load->model($this->model);
        $this->load->model('Company_model');
        $this->load->model('Contact_model');
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Detail';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $detail = $this->Log_model->detail($id);
        $data['log_id']             = $detail['id'];
        $data['log_week_ending']    = $detail['week_ending'];
        $data['log_contact_date']   = $detail['contact_date'];
        $data['log_work']           = $detail['work'];
        $data['log_contact_method'] = $detail['id_contact_method'];
        $data['log_specify']        = $detail['specify'];
        $data['log_results']        = $detail['results'];
        $data['log_remarks']        = $detail['remarks'];
        // TODO: query for contact method (new model)        
        
        $company = $this->Company_model->detail($detail['id_company']);
        $data['log_company']        = $company['name'];
        
        $contact = $this->Contact_model->detail($detail['id_contact']);
        $data['log_first']          = $contact['name_first'];
        $data['log_middle']         = $contact['name_middle'];
        $data['log_last']           = $contact['name_last'];
        $data['log_contact']        = $this->name_this($data['log_first'], $data['log_middle'], $data['log_last']);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('log/detail', $data);
        $this->load->view('log/detail/log', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function update($id)
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
        $this->load->view('log/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete($id)
    {
        $this->load->model($this->model);
        $this->load->helper('url');
        $this->load->helper('form');
        
        $data['log_id']         = $this->uri->segment(3);
        $data['topic']          = $this->topic;
        $data['subtopic']       = 'Delete';
        $data['loginout']       = 'to-do';
        $data['session_whose']  = 'too-doo';        
        
        if ($this->input->post('delete_no'))
        {
            // RETURN TO THE DETAIL PAGE
            redirect("log/detail/{$data['log_id']}");
        }
        elseif ($this->input->post('delete_yes'))
        {
            // DELETE THE RECORD; RETURN TO INDEX
            $this->Log_model->delete($data['log_id']);
            redirect("log/");
        }
        else
        {
            // LOAD THE DELETE PAGE
            // TODO: Consolidate Delete View
            $this->load->view('templates/head', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/aside', $data);
            $this->load->view('log/delete', $data);
            $this->load->view('templates/footer', $data);
            $this->load->view('templates/foot', $data);          
        } 
    }
}
/* End of file log.php */
/* Location: ./application/controllers/log.php */