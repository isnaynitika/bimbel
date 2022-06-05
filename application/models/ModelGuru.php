<?php

class ModelGuru extends CI_Model
{

    public function getData()
    {
        return $this->db->get('guru');
    }

    public function inputData($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function hapusData($id)
    {
        return $this->db->delete('guru', array('id' => $id));
    }

    public function editData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detailData($id = null)
    {
        $query = $this->db->get_where('guru', array('id' => $id))->row();
        return $query;
    }
}
