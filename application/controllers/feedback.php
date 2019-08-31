<?php
class Feedback extends CI_Controller
{
    public function index()
    {
        $this->load->view('user_view/homepage');
    }
  
      public function message()
      {
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $mobile=$this->input->post('mobile');
            $comment=$this->input->post('comment');
            
            $data = array(
                            
                'name' => $name,
                'mobile' => $mobile,
                'email' => $email,
                'comment' => $comment
            ); 
            
            if($this->feedback_model->insert_data($data))
            {
                  
            }
            
      }
}