<?php
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }

    public function login()
    {

        $data['title'] = 'Login Perpustakaan';
        $this->load->view('auth/login', $data);
    }

    
}
