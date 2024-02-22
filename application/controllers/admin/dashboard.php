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
        $this->load->view("admin/dashboard");
    }

    public function charts()
    {
        $this->load->view('admin/charts');
    }

    public function card()
    {
        $this->load->view('admin/card');
    }

    public function daftarbuku()
    {

        $data['buku'] = $this->DataBuku_model->get_buku();
        $this->load->view('admin/buku/daftarbuku', $data);
    }
}
