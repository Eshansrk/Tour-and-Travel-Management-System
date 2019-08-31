<?php 

class User_signup_model extends CI_Model{
    
    public function insert_data($data){
        
        $count = $this->db->insert('signup ',$data);
        
        if($count>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
} 