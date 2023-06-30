<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends AUTH_Controller
{
    public function index()
    {
        $data['page'] = "Dashboard";
        $this->template->views('bo/Dashboard/Home', $data);
    }
}
