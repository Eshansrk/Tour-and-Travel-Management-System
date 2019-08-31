<?php
class User_signup extends CI_Controller
{
    public  function index()
    {
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
            $this->load->view('users_view/signup',$data); 
        
    }
    
    public function signup()
    {
        $this->form_validation->set_rules('fullname','Fullname','required');
        
        $this->form_validation->set_rules('nid','NID','required|min_length[4]|integer');
        
        $this->form_validation->set_rules('username','User Name','required|is_unique[signup.username]');
        
        $this->form_validation->set_rules('password','Password','required');
        
        
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");  
        
        
        if($this->form_validation->run())
        {
            $fullname=$this->input->post('fullname');
            $nid=$this->input->post('nid');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $email=$this->input->post('email');
            $address=$this->input->post('address');
            
            $data = array(
                            
                'fullname' => $fullname,
                'nid' => $nid,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'address' => $address
            ); 
            
            if($this->user_signup_model->insert_data($data))
            {
                if(! $this->session->userdata('userid'))
                        $data['islogged'] = "no";
        
                else $data['islogged'] = "yes";
               // return redirect('user');
                $this->load->view('users_view/logIN',$data);    
            }
            
        }
        else{
                            if(! $this->session->userdata('userid'))
                        $data['islogged'] = "no";
        
                else $data['islogged'] = "yes";
            $this->load->view('users_view/signup',$data);
        }
    }
    
    
    

    
}