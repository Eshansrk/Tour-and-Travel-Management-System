<?php
class Admin extends CI_Controller
{
   public  function package()
    {
         
         if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
       
         $data['fetch_data'] = $this->admin_model->fetch_data_package();
        
        $this ->load->view('admin_view/admin_packages_view',$data);
    }
    
       public  function booking()
    {
         
         if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
       
         $data['fetch_data'] = $this->admin_model->fetch_data_booking();
        
        $this ->load->view('admin_view/admin_booking_view',$data);
    }
    
       public  function signup()
    {
         
         if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
       
         $data['fetch_data'] = $this->admin_model->fetch_data_signup();
        
        $this ->load->view('admin_view/admin_signup_view',$data);
    }
    
    public  function feedback()
    {
         
         if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
       
         $data['fetch_data'] = $this->admin_model->fetch_data_feedback();
        
        $this ->load->view('admin_view/admin_feedback_view',$data);
    }
}