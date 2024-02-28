<?php
class Data_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataBuku_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('admin/buku/user');
    }
}
