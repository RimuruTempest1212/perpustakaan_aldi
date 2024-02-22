
<?php

class User extends CI_Controller{
    public function login(){

        $this->load->view('auth/login');
    }

    public function register(){

        $this->load->view('admin/register');
    }

    public function dashboard(){
        $this->load->view("content_admin/bantuan");
    }

}