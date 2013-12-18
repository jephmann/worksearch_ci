<?php
    class Company_model extends CI_Model {
        public function __construct()
        {
            $this->load->database();
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