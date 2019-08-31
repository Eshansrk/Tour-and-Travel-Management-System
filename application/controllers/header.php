<?php
class Header extends CI_Controller
{
    public  function index()
    {
        
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         $this->load->view('users_view/header',$data);
    }
}