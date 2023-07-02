<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->model('M_admin');
    }

    public function index()
    {
        // $this->session->sess_destroy();
        // $this->load->model('M_admin', 'admin');

        // $session = $this->session->userdata();

        // if ($session == '') {
        redirect('Home');
        // } else {
        //     redirect('Dashboard');
        // }
    }

    public function login()
    {
        $this->form_validation->set_rules('Email', 'Email', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = trim($this->input->post('Email'));
            $password = trim($this->input->post('Password'));

            $data     = $this->M_auth->login($username, $password);

            if ($data == false) {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Gagal Login</strong> Pastikan User dan Password yang Anda Masukkan Benar.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
                redirect('Home/Login');
            } else {
                $userdata = array(
                    'id_user'     => $data->id_user,
                    'nama'        => $data->nama,
                    'username'    => $data->username,
                    'role'        => $data->id_role
                );
                $this->session->set_userdata($userdata);
                redirect('Dashboard');
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Periksa Isian!</strong>' . validation_errors() . '.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>');

            redirect('Home/Login');
        }
    }


    function addRegister()
    {
        $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('repass', 'Re Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $pass   = trim($this->input->post('pass'));
            $repass = trim($this->input->post('repass'));
            $nama   = $this->input->post('nm_lengkap');
            $email  = $this->input->post('email');


            if ($pass != $repass) {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Password Failed</strong>Password Tidak Sama.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
                redirect('Home/Register');
            }

            $data = array(
                'nama'          => $nama,
                'username'      => $nama,
                'email'         => $email,
                'pass'          => md5($repass),
                'status'        => '3',
                'id_role'       => '2',
            );

            $this->M_admin->save($data, 'tbl_user');

            $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Registrasi Berhasil</strong> Silakan Login menggunakan Email Dan Password anda.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>');

            redirect('Home/Login');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Periksa Isian!</strong>' . validation_errors() . '.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>');
            redirect('Home/Register');
        }
    }


    public function logout()
    {
        // update last login
        date_default_timezone_set("ASIA/JAKARTA");
        $date = array('last_login' => date('Y-m-d H:i:s'));
        // $id = $this->session->userdata('idnya');
        // $this->M_auth->logout($date, $id);
        // destroy session
        $this->session->sess_destroy();
        redirect('Home');
    }
}
