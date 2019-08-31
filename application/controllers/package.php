<?php
class Package extends CI_Controller
{
   public  function dhaka()
    {
         
         if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
       
         $data['fetch_data'] = $this->package_model->fetch_data_Dhaka();
        
        $this ->load->view('users_view/package_view',$data);
    }
    
    public  function chittagong()
    {
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
      
        $data['fetch_data'] = $this->package_model->fetch_data_Chittagong();
        $this ->load->view('users_view/package_view',$data);
     
    }
    
          public  function khulna()
     {
        
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
        $data['fetch_data'] = $this->package_model->fetch_data_khulna();
        $this ->load->view('users_view/package_view',$data);
    }
    
        public function northBengal()
    {
    if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
      $data['fetch_data'] = $this->package_model->fetch_data_NorthBengal();
        $this ->load->view('users_view/package_view',$data); 
    }
    
      public  function sylhet()
    {
    if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
      $data['fetch_data'] = $this->package_model->fetch_data_Sylhet();
        $this ->load->view('users_view/package_view',$data); 
    }
    
}
  