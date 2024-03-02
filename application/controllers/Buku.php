<?php
class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('DataBuku_model');
        $this->load->helper('form');
    }



    public function index()
    {

        $data['buku'] = $this->DataBuku_model->get_buku();
        $data['subtitle'] = 'Daftar Semua Buku';
        $this->load->view('data_buku/databuku_view',  $data);
    }

    public function tambah_buku()
    {
        $this->load->view('data_buku/tambah_buku');
    }

    function delete_buku($buku_id)
    {
        $data = $this->DataBuku_model->delete_data($buku_id)->row();
        $nama = './uploads/' . $data->gambar;
        $data = $this->DataBuku_model->delete_buku($buku_id);

        if (is_readable($nama) && unlink($nama)) {
            redirect(base_url('daftarbuku'));
        } else {
            echo "Gagal";
        }
        redirect('daftarbuku');
    }

    function halaman_edit($id)
    {
        $data['buku'] = $this->DataBuku_model->get_buku_by_id($id);

        $this->load->view('data_buku/editBuku',  $data);
    }

    public function kategori()
    {
        $this->load->view('kategori_view');
    }

    public function insert_buku_NEW()
    {

        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);

        $config['upload_path']          = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $filename = "buku_" . time() . "." . $ext;
        $config['file_name'] = 'buku_' . time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Error [ Gambar Tidak ditemukan ]";
        } else {
            $gambar = $this->upload->data();
            $buku_id = $this->input->post('buku_id', TRUE);
            $judul = $this->input->post('judul', TRUE);
            $penulis = $this->input->post('penulis', TRUE);
            $penerbit = $this->input->post('penerbit', TRUE);
            $tahun_terbit = $this->input->post('tahun_terbit', TRUE);

            $insert = array(
                'gambar' => $filename,
                'buku_id' => $buku_id,
                'judul' => $judul,
                'penulis' => $penulis,
                'penerbit' => $penerbit,
                'tahun_terbit' => $tahun_terbit,
            );



            $this->DataBuku_model->insert_buku($insert);



            redirect(base_url('daftarbuku'));
        }
    }

    public function Update_Buku()
    {
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $buku_id = $this->input->post('buku_id');
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $gambarOld = $this->input->post('gambar_old');
        $data = array();
        $config['upload_path']          = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['overwrite']            = true; // tindih file dengan file baru
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $config['file_name']            = $gambarOld;

        $newFilename = explode(".", $gambarOld);
        $config['file_name'] = $newFilename[0];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data['gambar'] = $config['file_name'] . '.' . $ext;
        }
        $data['judul'] = $judul;
        $data['penulis'] = $penulis;
        $data['penerbit'] = $penerbit;
        $data['tahun_terbit'] = $tahun_terbit;


        if (!empty($buku_id)) {
            $this->DataBuku_model->update_buku($buku_id, $data);
        } else {

            echo "Edit GAGAL";
        }

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Congratulation! Your book data has been updated
       </div>');


        redirect(base_url('daftarbuku'));
    }
}
