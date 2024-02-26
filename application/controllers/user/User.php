
<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('DataBuku_model');
        $this->load->helper('form');
    }

    public function login()
    {
        $data['title'] = 'Login Perpustakaan';
        $this->load->view('auth/login', $data);
    }

    public function home(){

        
        $data['buku'] = $this->DataBuku_model->get_buku();
        
        $this->load->view('user_pages/home', $data);
    }
}
