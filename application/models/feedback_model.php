<?php 

class Feedback_model extends CI_Model{
    
    public function insert_data($data){
        
        $count = $this->db->insert('feedback ',$data);
        
        if($count>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
} 