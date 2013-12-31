<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
    
    var $topic = 'Companies';
    var $model = 'Company_model';
    
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
        $this->load->model($this->model);
        $this->load->helper('url');
        $this->load->library('table');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Select';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $companies          = $this->Company_model->select_all();        
        $data['table']      = $this->table->generate($companies);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/table', $data);
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
        $this->load->view('company/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail($id)
    {
        $this->load->model($this->model);
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Detail';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $detail = $this->Company_model->detail($id);
        // WHO
        $data['company_id']             = $detail['id'];
        $data['company_name']           = $detail['name'];
        $data['company_recruiter']      = $this->recruit_this($detail['recruiter']);
        $data['company_industry']       = $detail['industry'];
        $data['company_description']    = $detail['description'];
        $data['company_remarks']        = $detail['remarks'];
        // WHERE
        $data['company_building']       = $detail['address_building'];
        $data['company_street']         = $detail['address_street'];
        $data['company_unit']           = $detail['address_unit'];
        $data['company_city']           = $detail['address_city'];
        $data['company_state']          = $detail['address_state'];
        $data['company_zip']            = $this->zip_this($detail['address_zip5'], $detail['address_zip4']);
        $data['company_csz']            = $this->csz_this($data['company_city'], $data['company_state'], $data['company_zip']);
        $data['company_address']        = $this->address_this($data['company_building'], $data['company_street'], $data['company_unit'], $data['company_csz']);
        // COMMUNICATION
        $data['company_email']          = $detail['email'];
        $data['company_phone']          = $this->phone_this($detail['phone'], $detail['phone_extension']);
        $data['company_fax']            = $this->phone_this($detail['fax'], NULL);
        // LINKS
        $data['company_website']        = $detail['website'];
        $data['company_linkedin']       = $detail['linkedin'];
        $data['company_facebook']       = $detail['facebook'];
        $data['company_twitter']        = $detail['twitter'];
        $data['company_googleplus']     = $detail['googleplus'];
         
        // TODO: company contacts
        
        // TODO: company logs

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('company/detail', $data);
        $this->load->view('company/detail/company', $data);
        $this->load->view('company/detail/contacts', $data);
        $this->load->view('company/detail/logs', $data);
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
        $this->load->view('company/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete($id)
    {
        $this->load->model($this->model);
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Delete';
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