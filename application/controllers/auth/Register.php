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
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]',[
            'is_unique' => 'This Username has already registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_password]',['matches'=>'Passwords are not the same']);
        $this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Register Perpustakaan';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert-success" role="alert">
           Congratulation! your account has been created. Please Login
          </div>');

            redirect(base_url('login'));
        }
    }
}
