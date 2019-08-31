<?php
class Admin_dashboard extends CI_Controller
{
    public  function index()
    {
       $this->load->view('admin_view/dashboard');
    }
}