
<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('DataBuku_model');
        $this->load->model('On_Going_model');
        $this->load->helper('form');
    }



    public function home()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->DataBuku_model->get_buku();
        $data['going'] = $this->On_Going_model->get_going();
        $data['title'] = 'R-Books';
        // echo"Welcome".$data['user']['name'];
        $this->load->view('user_pages/template/head', $data);
        $this->load->view('user_pages/dashboard', $data);
        $this->load->view('user_pages/template/footer');
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
