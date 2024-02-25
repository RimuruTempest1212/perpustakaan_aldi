
<?php

class User extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login Perpustakaan';
        $this->load->view('auth/login', $data);
    }

    public function register()
    {
        
        $this->load->view('admin/register');
    }

    public function dashboard()
    {
        $this->load->view("content_admin/bantuan");
    }
}
