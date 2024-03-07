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

    public function tambah_user(){

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        $config['upload_path']          = './profile/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $filename = "user_" . time() . "." . $ext;
        $config['file_name'] = 'user_' . time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            echo "Error [ image Tidak ditemukan ]";
        } else {
            $image = $this->upload->data();
            $email = $this->input->post('email', TRUE);
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $nama_lengkap = $this->input->post('nama_lengkap', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            

            $insert = array(
                'image' => $filename,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_lengkap' => $nama_lengkap,
                'alamat' => $alamat,
                'role_id' =>2,
                'is_active'=>1,
                'date_created' => time(),
            );



            $this->User_model->insert_user($insert);



            redirect(base_url('data_user'));
        }
    }

    public function edit_user(){

    }

    public function delete_user($user_id) {
        $data = $this->User_model->delete_data($user_id)->row();
        $nama = './profile/' . $data->image;
        $data = $this->User_model->delete_user($user_id);

        if (is_readable($nama) && unlink($nama)) {
            redirect(base_url('data_user'));
        } else {
            echo "Gagal";
        }
        redirect('data_user');
    }
}
