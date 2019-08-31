<?php
class User extends CI_Controller
{
    public  function index()
    {
        $data['pid'] = $this->input->get('selected');
        if($this->session->userdata('userid')){
            $data['islogged'] = "yes";
            //return redirect('user_booking',$data);
            $this->load->view('users_view/booking',$data);
        }
                
         else{ 
            $data['islogged'] = "no";
        
             $this->load->view('users_view/logIN',$data);
        }
    }
    
    public function user_login()
    {
        $data['pid'] = $this->input->post('selected');
        if($this->session->userdata('userid')){
            $data['islogged'] = "yes";
            
        }
      else{ 
            $data['islogged'] = "no";
        
            
        }
        $this->form_validation->set_rules('username','User Name','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $usertype = $this->input->post('usertype');
           
            $uid = $this->user_login_model->login($username,$password,$usertype);
            if($uid)
            {
                $this->session->set_userdata('userid',$uid);
                
                 if(! $this->session->userdata($uid))
                          $data['islogged'] = "no";
        
                else $data['islogged'] = "yes";
                //$this-load->view('users_view/');
                if($usertype == "user")
                {
                   $this->load->view('users_view/booking',$data);  
                }
                else{
                    return redirect('admin_dashboard');
                }
            }
            else{
                $this->session->set_flashdata('login_failed','Invalid Username/Password. If you are  new user please ');
               return redirect('user');
            }
            
        }
        else{
             if(! $this->session->userdata('userid'))
                          $data['islogged'] = "no";
        
                else $data['islogged'] = "yes";
            $this->load->view('users_view/logIN',$data);
            //echo validation_errors();
        }
    }
    
    public function user_logout()
    {
        $this->session->unset_userdata('userid',$uid);
        return redirect('user');
    }
    
  
    
    
}