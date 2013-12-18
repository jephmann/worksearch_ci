<?php
    class Profile_model extends CI_Model {
        public function __construct()
        {
            $this->load->database();
        }
        
        public function create()
        {
           // insert a single profile 
        }
        
        public function read()
        {
            // select a single profile            
        }
        
        public function update()
        {
            // update a single profile            
        }
        
        public function delete()
        {
            // delete a single profile
        }
    }