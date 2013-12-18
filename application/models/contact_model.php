<?php
    class Contact_model extends CI_Model {
        public function __construct()
        {
            $this->load->database();
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