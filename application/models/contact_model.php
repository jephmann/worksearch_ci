<?php
    class Contact_model extends CI_Model {
        
        private $primary_key    = 'id';
        private $table          = 'contacts';
        
        public function __construct()
        {
            $this->load->database();
        }
        
        public function select_all()
        {
            // display all contacts on company/index
            // TODO: Limit to id_user
            $query = $this->db->get($this->table);
            return $query;
        }
        
        public function create()
        {
           // insert a single contact 
        }
        
        public function read()
        {
            // select a single contact            
        }
        
        public function update()
        {
            // update a single contact            
        }
        
        public function delete()
        {
            // delete a single contact
        }
    }