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
        $data['title'] = 'Dashboard Perpustakaan';
        $this->load->view("admin/dashboard", $data);
    }

    public function charts()
    {
        $data['title'] = 'Charts';
        $this->load->view('admin/charts', $data);
    }

    public function card()
    {
        $data['title'] = 'Card';
        $this->load->view('admin/card', $data);
    }

    public function daftarbuku()
    {

        $data['buku'] = $this->DataBuku_model->get_buku();
        $data['title'] = 'Daftar Buku';
        $this->load->view('admin/buku/daftarbuku', $data);
    }
}
