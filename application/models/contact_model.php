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
        
        public function cocontacts($id, $id_company)
        {
            if($id_company != FALSE)
            {
                $query = $this->db->get_where($this->table, array('id_company' => $id_company, 'id' => $id));
                return $query;
            }
            else
            {
                return FALSE;
            }
        }
        
        public function create()
        {
           // insert a single contact 
        }
        
        public function update()
        {
            // update a single contact            
        }
        
        public function delete()
        {
            // delete a single contact
            $query = $this->db->delete($this->table, array('id' => $id));
            return $query;
        }
    }