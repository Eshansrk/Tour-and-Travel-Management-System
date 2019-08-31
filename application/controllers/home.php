<?php
class Home extends CI_Controller
{
    public  function index()
    {
         //$this->load->view('users_view/homepage');
        
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         $this->load->view('users_view/homepage',$data);
    }
    public function account()
    {
         if( $this->session->userdata('userid'))
                         return redirect('user_dashboard');
        
                else return redirect('user');
        
            
    }

}