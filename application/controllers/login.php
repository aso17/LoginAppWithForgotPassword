<?php
class login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/index');
    }

    public function register()
    {

        $this->load->view('login/register');
    }


    public function forgot()
    {
        $this->load->view('login/forgot');
    }
}