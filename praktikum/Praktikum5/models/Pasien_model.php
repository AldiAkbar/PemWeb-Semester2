<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function getAll() {
        return $this->db->get('pasien')->result_array();
    }

    public function findById($id) {
        return $this->db->get_where('pasien', ['id'=>$id])->row_array();
    }


}