<?php
class User_booking extends CI_Controller
{
    public  function index()
    {
        //$this->load->view('users_view/booking'); 
        if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
        
         $this->load->view('users_view/booking',$data);
        
    }
    
    public function booking()
    {
        $this->form_validation->set_rules('fullname','Fullname','required');
        
       $this->form_validation->set_rules('pid','Package ID','required|max_length[4]|integer');
        
        $this->form_validation->set_rules('mobile','Mobile number ','integer');
        
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        $this->form_validation->set_rules('adults','Number of adults','required|integer');
        
        $this->form_validation->set_rules('children','Number of children ','required|integer');
        
        $this->form_validation->set_rules('bookingdate','Booking date','required');
        
        $this->form_validation->set_rules('journeydate','Journey date ','required');
        
        
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");  
        
        
        if($this->form_validation->run())
        {
            $fullname=$this->input->post('fullname');
            $pid=$this->input->post('pid');
            $gender=$this->input->post('gender');
            $mobile=$this->input->post('mobile');
            $email=$this->input->post('email');
            $address=$this->input->post('address');
            $birthday=$this->input->post('birthday');
            $adults=$this->input->post('adults');
            $children=$this->input->post('children');
            $bookingdate=$this->input->post('bookingdate');
            $journeydate=$this->input->post('journeydate');
            $enquiry=$this->input->post('enquiry');
            
            $data = array(
                            
                'fullname' => $fullname,
                'pid' => $pid,
                'gender' => $gender,
                'mobile' => $mobile,
                'email' => $email,
                'address' => $address,
                'birthday' => $birthday,
                'adults' => $adults,
                'children' => $children,
                'bookingdate' => $bookingdate,
                'journeydate' => $journeydate,
                'enquiry' => $enquiry
            ); 
            
            if($this->user_booking_model->insert_data($data))
            {
                 
         
            $this->session->set_flashdata('successful',' ');
               return redirect('user_booking');
            
        }
        }
        
        else{
                    if(! $this->session->userdata('userid'))
                $data['islogged'] = "no";
        
        else $data['islogged'] = "yes";
         
            $this->load->view('users_view/booking',$data);    
            //echo validation_errors();
        }
}
        
}