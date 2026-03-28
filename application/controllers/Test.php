<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function db()
    {
        $this->load->database();

        if ($this->db->conn_id) {
            echo 'Database connection successful';
        } else {
            echo 'Database connection failed';
        }
    }
}