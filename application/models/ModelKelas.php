<?php

class ModelKelas extends CI_Model
{

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('materi', 'materi.kode_materi = kelas.kode_materi');
        $query = $this->db->get();

        return $query;
    }

    public function inputData($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function hapusData($id_kelas)
    {
        return $this->db->delete('kelas', array('id_kelas' => $id_kelas));
    }

    public function editData($where, $table)
    {
        $this->db->select('*');
        $this->db->from('kelas');

        $this->db->where('id_kelas', $where);
        $this->db->join('materi', 'materi.kode_materi = kelas.kode_materi');
        $query = $this->db->get();

        return $query;
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detailData($id_kelas = null)
    {

        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('materi', 'materi.kode_materi = kelas.kode_materi');
        $this->db->where('id_kelas',$id_kelas);
        $query = $this->db->get();

        return $query;
    }
}
