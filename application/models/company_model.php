<?php
    class Company_model extends CI_Model {
        
        private $primary_key    = 'id';
        private $table          = 'companies';
        
        public function __construct()
        {
            $this->load->database();
        }
        
        public function select_all()
        {
            // display all companies on company/index
            // TODO: Limit to id_user
            $query = $this->db->get($this->table);
            return $query;
        }
        
        public function detail($id)
        {
            if($id != FALSE)
            {
                $query = $this->db->get_where($this->table, array('id' => $id));
                return $query->row_array();
            }
            else
            {
                return FALSE;
            }
        }
        
        public function create()
        {
           // insert a single company 
        }
        
        public function read()
        {
            // select a single company            
        }
        
        public function contact_company()
        {
            // select a contact's company            
        }
        
        public function update()
        {
            // update a single company            
        }
        
        public function delete()
        {
            // delete a single company
        }
    }