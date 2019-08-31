<?php

class admin_model extends CI_Model
{
    public function fetch_data_package()
    {
        $this->db->select('package_name,tour_place,division,category,days,amount,pid');
        $query = $this->db->get('packages');
        return $query;
    }
    
        public function fetch_data_booking()
    {
        $this->db->select('pid,bid,fullname,gender,email,address,adults,children,bookingdate,journeydate');
        $query = $this->db->get('booking');
        return $query;
    }
    
      public function fetch_data_signup()
    {
        $this->db->select('userid,fullname,nid,email,address');
        $query = $this->db->get('signup');
        return $query;
    }
    
    public function fetch_data_feedback()
    {
        $this->db->select('name,email,mobile,comment');
        $query = $this->db->get('feedback');
        return $query;
    }
}