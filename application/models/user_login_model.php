<?php

class User_login_model extends CI_Model{
    
    public function login($username,$password,$usertype)
    {
        
        $q=$this->db ->where(['username'=>$username,'password'=> $password,'usertype'=>$usertype])
                     ->get('signup');
        
        if($q->num_rows() >= 1 )
        {
            return $q->row()->userid;
        }
        else{
            return FALSE; 
        }
    }
}