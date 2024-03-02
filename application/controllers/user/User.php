
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



    public function home()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->DataBuku_model->get_buku();
        
        // echo"Welcome".$data['user']['name'];
        $this->load->view('user_pages/home', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">
          You have been logged out!
          </div>');

        redirect(base_url('auth'));
    }
}
