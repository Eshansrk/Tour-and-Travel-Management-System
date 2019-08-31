<?php
class Update_model extends CI_Model
{
    public function delete_packages($pid)
    {
        return $this->db->delete('packages',['pid'=>$pid]);
        
            
    }
    
      public function delete_booking($bid)
    {
        return $this->db->delete('booking',['bid'=>$bid]);
        
            
    }
}