<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    var $topic = 'Contacts';
    var $model = 'Contact_model';
    
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
        
        $contacts           = $this->Contact_model->select_all();        
        $data['table']      = $this->table->generate($contacts);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/table', $data);
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
        $this->load->view('contact/create', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function detail($id)
    {
        $this->load->model($this->model);
        $this->load->model('Company_model');
        $this->load->helper('url');

        $data['topic']      = $this->topic;
        $data['subtopic']   = 'Detail';
        $data['loginout']   = 'to-do';
        $data['session_whose'] = 'too-doo';
        
        $detail = $this->Contact_model->detail($id);
        // COMPANY
        $data['contact_company']    = $detail['id_company'];
        // WHO
        $data['contact_id']         = $detail['id'];
        $data['contact_first']      = $detail['name_first'];
        $data['contact_middle']     = $detail['name_middle'];
        $data['contact_last']       = $detail['name_last'];
        $data['contact_name']       = $this->name_this($data['contact_first'], $data['contact_middle'], $data['contact_last']);
        $data['contact_title']      = $detail['title'];
        $data['contact_department'] = $detail['department'];
        $data['contact_remarks']    = $detail['remarks'];
        // COMMUNICATION
        $data['contact_email']      = $detail['email'];
        $data['contact_phone']      = $this->phone_this($detail['phone'], $detail['phone_extension']);
        $data['contact_mobile']     = $this->phone_this($detail['phone_mobile'], NULL);
        $data['contact_fax']        = $this->phone_this($detail['fax'], NULL);
        // LINKS
        $data['contact_linkedin']   = $detail['linkedin'];
        $data['contact_facebook']   = $detail['facebook'];
        $data['contact_twitter']    = $detail['twitter'];
        $data['contact_googleplus'] = $detail['googleplus'];
        
        $company = $this->Company_model->detail($detail['id_company']);
        // WHO
        $data['company_id']             = $company['id'];
        $data['company_name']           = "<a href=\"../../company/detail/{$company['id']}\">{$company['name']}</a>";
        $data['company_recruiter']      = $this->recruit_this($company['recruiter']);
        $data['company_industry']       = $company['industry'];
        $data['company_description']    = $company['description'];
        $data['company_remarks']        = $company['remarks'];
        // WHERE
        $data['company_building']       = $company['address_building'];
        $data['company_street']         = $company['address_street'];
        $data['company_unit']           = $company['address_unit'];
        $data['company_city']           = $company['address_city'];
        $data['company_state']          = $company['address_state'];
        $data['company_zip']            = $this->zip_this($company['address_zip5'], $company['address_zip4']);
        $data['company_csz']            = $this->csz_this($data['company_city'], $data['company_state'], $data['company_zip']);
        $data['company_address']        = $this->address_this($data['company_building'], $data['company_street'], $data['company_unit'], $data['company_csz']);
        // COMMUNICATION
        $data['company_email']          = $company['email'];
        $data['company_phone']          = $this->phone_this($company['phone'], $company['phone_extension']);
        $data['company_fax']            = $this->phone_this($company['fax'], NULL);
        // LINKS
        $data['company_website']        = $company['website'];
        $data['company_linkedin']       = $company['linkedin'];
        $data['company_facebook']       = $company['facebook'];
        $data['company_twitter']        = $company['twitter'];
        $data['company_googleplus']     = $company['googleplus'];
        
        // TODO: query for contact co-contacts
        
        // TODO: query for contact logs

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/aside', $data);
        $this->load->view('contact/detail', $data);
        $this->load->view('contact/detail/contact', $data);
        $this->load->view('company/detail/company', $data);
        $this->load->view('contact/detail/contacts', $data);
        $this->load->view('contact/detail/logs', $data);
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
        $this->load->view('contact/update', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/foot', $data);
    }
        
    public function delete($id)
    {
        $this->load->model($this->model);
        $this->load->helper('url');
        $this->load->helper('form');
        
        $data['contact_id']     = $this->uri->segment(3);
        $data['topic']          = $this->topic;
        $data['subtopic']       = 'Delete';
        $data['loginout']       = 'to-do';
        $data['session_whose']  = 'too-doo';        
        
        if ($this->input->post('delete_no'))
        {
            // RETURN TO THE DETAIL PAGE
            redirect("contact/detail/{$data['contact_id']}");
        }
        elseif ($this->input->post('delete_yes'))
        {
            // DELETE THE RECORD; RETURN TO INDEX
            $this->Contact_model->delete($data['contact_id']);
            redirect("contact/");
        }
        else
        {
            // LOAD THE DELETE PAGE
            // TODO: Consolidate Delete View
            $this->load->view('templates/head', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/aside', $data);
            $this->load->view('contact/delete', $data);
            $this->load->view('templates/footer', $data);
            $this->load->view('templates/foot', $data);          
        } 
    }
}
/* End of file contact.php */
/* Location: ./application/controllers/contact.php */