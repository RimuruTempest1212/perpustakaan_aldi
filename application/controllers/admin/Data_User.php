<?php
class Data_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['name_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->User_model->get_user();
        $data['title'] = 'Data User';
        $data['subtitle'] = 'Data Semua Account';
        // $data['subtitle'] = 'Data User';
        $this->load->view('admin/buku/user', $data);
    }
}
