<?php
class kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategoribuku_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->kategoribuku_model->get_kategoribuku();
        $data['subtitle'] = "Kategori Buku";
        $this->load->view('admin/buku/kategori_buku', $data);
    }
}
