<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataBuku_model');
        $this->load->helper('form');
    }

    public function home()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard Perpustakaan';
        $this->load->view("admin/template/header", $data);
        $this->load->view("admin/template/sidebar", $data);
        $this->load->view("admin/template/topbar", $data);
        $this->load->view("admin/dashboard", $data);
        $this->load->view("admin/template/footer");
    }

    public function charts()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Charts';
        $this->load->view('admin/charts', $data);
    }

    public function card()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Card';
        $this->load->view('admin/card', $data);
    }

    public function daftarbuku()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['subtitle'] = 'Daftar Semua Buku';
        $data['buku'] = $this->DataBuku_model->get_buku();
        $data['title'] = 'Daftar Buku';

        $this->load->view('admin/buku/daftarbuku', $data);
    }



    public function profile()
    {

        $data['subtitle'] = 'My Profile';
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/profile', $data);
    }
}
