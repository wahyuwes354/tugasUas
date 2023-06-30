<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('fo/Home');
	}

	public function register()
	{
		$this->load->view('fo/Register');
	}

	public function Login()
	{
		$this->load->view('fo/Login');
	}
}
