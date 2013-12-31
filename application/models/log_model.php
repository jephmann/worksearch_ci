<?php
    class Log_model extends CI_Model {
        
        private $primary_key    = 'id';
        private $table          = 'logs';
        
        public function __construct()
        {
            $this->load->database();
        }
        
        public function select_all()
        {
            // display all logs on log/index
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
           // insert a single log 
        }
        
        public function company_logs()
        {
            // select a company's logs
        }
        
        public function contact_logs()
        {
            // select a contact's logs
        }
        
        public function update()
        {
            // update a single log            
        }
        
        public function delete()
        {
            // delete a single log
        }
    }