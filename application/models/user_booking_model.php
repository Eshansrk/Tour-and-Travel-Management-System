<?php
class User_booking_model extends CI_Model{
        public function insert_data($data){
        

        
        $count = $this->db->insert('booking ',$data);
        
        if($count>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}