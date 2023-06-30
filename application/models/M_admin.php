<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_');
    }

    public function update($name_id, $id, $table, $data)
    {
        $this->db->where($name_id, $id);
        $this->db->update($table, $data);

        return true;
    }

    public function save($data, $table)
    {
        $this->db->insert($table, $data);
        return true;
    }

    public function delete($id_name, $id, $table)
    {
        $this->db->where($id_name, $id);
        $this->db->delete($table);
    }
}
