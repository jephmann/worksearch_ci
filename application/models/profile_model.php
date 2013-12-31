<?php
    class Profile_model extends CI_Model {
        
        private $primary_key    = 'id';
        private $table          = 'profile';
        
        public function __construct()
        {
            $this->load->database();
        }
        
        public function select_all()
        {
            // display all profiles on contact/index
            // TODO: Limit to id_user
            // Unlike the other entities,
            // this would show one profile.
            $query = $this->db->get($this->table);
            return $query;
        }
        
        public function detail($id_user)
        {
            if($id_user != FALSE)
            {
                $query = $this->db->get_where($this->table, array('id_user' => $id_user));
                return $query->row_array();
            }
            else
            {
                return FALSE;
            }
        }
        
        public function create()
        {
           // insert a single profile 
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