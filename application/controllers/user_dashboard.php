<?php
class User_dashboard extends CI_Controller
{
    public  function index()
    {
         //$this->load->view('users_view/homepage');
        
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         $this->load->view('users_view/user_dashboard_view',$data);
    }
    

}