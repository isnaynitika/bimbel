<?php

class ModelPembelian extends CI_Model
{

    public function getData()
    {
        // return $this->db->get('pembelian');
        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('kelas', 'kelas.id_kelas = pembelian.id_kelas');
        $query = $this->db->get();

        // return $this->db->get('materi');
        return $query;
    }

    public function inputData($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function hapusData($id_pembelian)
    {
        return $this->db->delete('pembelian', array('id_pembelian' => $id_pembelian));
    }

    public function editData($id_pembelian, $table)
    {
        // return $this->db->get_where($table, $where);

        // return $this->db->get('pembelian');
        $this->db->select('*');
        $this->db->from('pembelian');

        $this->db->where('id_pembelian', $id_pembelian);
        $this->db->join('kelas', 'kelas.id_kelas = pembelian.id_kelas');
        $query = $this->db->get();

        // return $this->db->get('materi');
        return $query;
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detailData($id_pembelian = null)
    {
        // $query = $this->db->get_where('pembelian', array('id_pembelian' => $id_pembelian))->row();
        // return $query;

        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('kelas', 'kelas.id_kelas = pembelian.id_kelas');
        $this->db->where('id_pembelian',$id_pembelian);
        $query = $this->db->get();

        return $query;
    }
}
