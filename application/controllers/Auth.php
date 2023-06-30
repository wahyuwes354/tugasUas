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
                // $this->session->set_flashdata('error_msg', show_err_msg('<b style="font-size: 20px">GAGAL</b><br>Username / Password Anda Salah.'));
                redirect('Home');
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
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect('Home/Login');
        }
    }


    function addRegister()
    {

        // $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');
        // $this->form_validation->set_rules('pass', 'Password', 'required');
        // $this->form_validation->set_rules('repass', 'Re Password', 'required');

        // if ($this->form_validation->run() == TRUE) {
        // $pass = trim($_POST['pass']);
        // $repass = trim($_POST['repass']);

        $pass   = trim($this->input->post('pass'));
        $repass = trim($this->input->post('repass'));


        if ($pass != $repass) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                <strong>Password Failed</strong>Password Tidak Sama.
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>');
            // redirect('Auth/Register');
        }

        $cekemail = $this->M_auth->cek_email($this->input->post('email'));
        if (!empty($cekemail)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                <strong>Email Sudah Terdafatr</strong>Silakan menuju ke halaman login.
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>');
            redirect('Home/Register');
            // $return = "udah ada";
        } else {
            $nama           = $this->input->post('nm_lengkap');
            $email          = $this->input->post('email');
            $pass           = md5($this->input->post('repass'));

            $data = array(
                'nama'          => $nama,
                'username'      => $nama,
                'email'         => $email,
                'pass'          => $pass,
                'status'        => 'Register',
                'id_role'       => '2',
            );

            $return = $this->M_admin->save($data, 'tbl_user');
            redirect('Home/Login');
        }
        // echo json_encode($return);
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
