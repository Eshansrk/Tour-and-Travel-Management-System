<?php 
class Update extends CI_Controller
{
    public function delete_package()
    {
        $pid = $this->input->post('pid');
        if($this->update_model->delete_packages($pid))
        {
            $this->session->set_flashdata('feedback','Package deleted Succesfully');
            $this->session->set_flashdata('feedback_class','alert-success');
        }
        return redirect('admin/package');
    }
    
        public function cancel_booking()
    {
        $bid = $this->input->post('bid');
        if($this->update_model->delete_booking($bid))
        {
            $this->session->set_flashdata('feedback','Booking cancelled Succesfully');
            $this->session->set_flashdata('feedback_class','alert-success');
        }
        return redirect('admin/booking');
    }
}