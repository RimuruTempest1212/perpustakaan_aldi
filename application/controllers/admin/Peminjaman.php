<?php
class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjaman_model');
        $this->load->helper('form');
    }

    public function daftarpinjaman()
    {

        $data['peminjaman'] = $this->Pinjaman_model->get_pinjaman();
        $this->load->view('admin/buku/pinjaman', $data);
    }


    // public function update_pinjaman()
    // {

    //     $buku_id = $this->input->post('buku_id');
    //     $judul = $this->input->post('judul');
    //     $penulis = $this->input->post('penulis');
    //     $penerbit = $this->input->post('penerbit');
    //     $tahun_terbit = $this->input->post('tahun_terbit');



    //     if ($this->upload->do_upload('gambar')) {
    //         $data['gambar'] = $config['file_name'] . "." . $ext;
    //         $data['judul'] = $judul;
    //         $data['penulis'] = $penulis;
    //         $data['penerbit'] = $penerbit;
    //         $data['tahun_terbit'] = $tahun_terbit;
    //         unlink($gambarOld);
    //     }

    //     if (!empty($buku_id)) {
    //         $this->DataBuku_model->update_buku($buku_id, $data);
    //     } else {

    //         echo "Edit GAGAL";
    //     }
    //     redirect(base_url('daftarbuku'));
    // }

    public function pinjaman_aksi()
    {


        $peminjaman_id = $this->input->post('peminjaman_id');
        $user_id = $this->input->post('user_id');
        $buku_id = $this->input->post('buku_id');
        $tanggal_peminjaman = $this->input->post('tanggal_peminjaman');
        $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
        $status_peminjaman = $this->input->post('status_peminjaman');

        // $status_peminjaman_json = json_encode($status_peminjaman);


        $insert = array(

            'peminjaman_id' => $peminjaman_id,
            'user_id' => $user_id,
            'buku_id' => $buku_id,
            'tanggal_peminjaman' => $tanggal_peminjaman,
            'tanggal_pengembalian' => $tanggal_pengembalian,
            'status_peminjaman' => $status_peminjaman,
        );

        $this->Pinjaman_model->insert_pinjaman($insert);

        redirect(base_url('pinjamanbuku'));
    }

    public function pinjaman_aksi_update()
    {
        $peminjaman_id = $this->input->post('peminjaman_id');
        $user_id = $this->input->post('user_id');
        $buku_id = $this->input->post('buku_id');
        $tanggal_peminjaman = $this->input->post('tanggal_peminjaman');
        $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
        $status_peminjaman = $this->input->post('status_peminjaman');

        // $status_peminjaman_json = json_encode($status_peminjaman);


        $insert = array(


            'user_id' => $user_id,
            'buku_id' => $buku_id,
            'tanggal_peminjaman' => $tanggal_peminjaman,
            'tanggal_pengembalian' => $tanggal_pengembalian,
            'status_peminjaman' => $status_peminjaman,
        );

        if (!empty($peminjaman_id)) {
            $this->Pinjaman_model->update_pinjaman($peminjaman_id, $insert);
        } else {

            echo "Edit GAGAL";
        }
        redirect(base_url('pinjamanbuku'));
    }


    public function delete_pinjaman($id)
    {
        $this->Pinjaman_model->delete_pinjaman($id);

        redirect(base_url('pinjamanbuku'));
    }
}
