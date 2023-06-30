<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['page'] = "Profil";
        $this->template->views('bo/profile', $data);
    }

    public function data_pengguna()
    {
        $data['page'] = "Data Pengguna";
        $this->template->views('bo/User/Home', $data);
    }

    public function AddUSer()
    {
        $data['page'] = "Tambah Pengguna";
        $this->template->views('bo/User/AddUser', $data);
    }
}
