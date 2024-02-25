<?php
class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }

    public function register()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Register Perpustakaan';
            $this->load->view('auth/register', $data);
        } else {
            echo "Data Berhasil Ditambahkan!";
        }
    }
}
