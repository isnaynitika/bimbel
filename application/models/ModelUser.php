<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{

    function daftar($data)
    {
        $this->db->insert('users', $data);
    }
}
