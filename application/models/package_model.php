<?php

class Package_model extends CI_Model
{
    public function fetch_data_Dhaka()
    {
        $this->db->select('package_name,tour_place,category,days,amount,pid');
        $this->db->where('division','Dhaka ');
        $query = $this->db->get('packages');
        return $query;
    }
    
    public function fetch_data_khulna()
    {
        $this->db->select('package_name,tour_place,category,days,amount,pid');
        $this->db->where('division','Khulna ');
        $query = $this->db->get('packages');
        return $query;
    }
    
      public function fetch_data_Chittagong()
    {
        $this->db->select('package_name,tour_place,category,days,amount,pid');
        $this->db->where('division','Chittagong ');
        $query = $this->db->get('packages');
        return $query;
    }
    
     public function fetch_data_Sylhet()
    {
        $this->db->select('package_name,tour_place,category,days,amount,pid');
        $this->db->where('division','Sylhet ');
        $query = $this->db->get('packages');
        return $query;
    }
    
     public function fetch_data_NorthBengal()
    {
        $this->db->select('package_name,tour_place,category,days,amount,pid');
        $this->db->where('division','North Bengal ');
        $query = $this->db->get('packages');
        return $query;
    }
    
  
}