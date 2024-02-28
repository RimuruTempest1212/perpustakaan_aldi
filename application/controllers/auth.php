<?php
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Perpustakaan';
        $this->load->view('auth/login', $data);
    }

    public function login_proses()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Perpustakaan';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'][2]
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect(base_url('admin'));
                    } else {
                     
                        redirect(base_url('home'));
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">
                Wrong password
               </div>');

                    redirect(base_url('auth'));
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">
           This email has not been activated!
          </div>');

                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">
           Email Is not registered!!
          </div>');

            redirect(base_url('auth'));
        }
    }

    public function register()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has already registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]|callback_check_email', [
            'is_unique' => 'This Email has already registered!',
            'callback_email' => 'Email harus Format gmail.com'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_password]', ['matches' => 'Passwords are not the same']);
        $this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Perpustakaan';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('name', TRUE)),
                'username' => htmlspecialchars($this->input->post('username', TRUE)),
                'email' => htmlspecialchars($this->input->post('email', TRUE)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">
           Congratulation! your account has been created. Please Login
          </div>');

            redirect(base_url('auth'));
        }
    }

    public function check_email($email)
    {
        $allowed_domain = "gmail.com";
        $email_parts = explode("@", $email);
        if (isset($email_parts[1]) && $email_parts[1] !== $allowed_domain) {
            $this->form_validation->set_message("check_email", "email salah email harus " . $allowed_domain);
            return false;
        }
        return true;
    }
}
