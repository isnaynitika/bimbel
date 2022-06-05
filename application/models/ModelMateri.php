<?php

class ModelMateri extends CI_Model
{

    public function getData()
    {
        
        $this->db->select('*');
        $this->db->from('materi');
        $this->db->join('guru', 'guru.nip = materi.nip');
        $query = $this->db->get();

        // return $this->db->get('materi');
        return $query;
    }

    public function inputData($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function hapusData($kode_materi)
    {
        return $this->db->delete('materi', array('kode_materi' => $kode_materi));
    }

    public function editData($kode_materi)
    {
        // return $this->db->get_where($table, $where);

        $this->db->select('*');
        $this->db->from('materi');

        $this->db->where('kode_materi', $kode_materi);
        $this->db->join('guru', 'guru.nip = materi.nip');
        $query = $this->db->get();

        return $query;
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detailData($kode_materi = null)
    {
        // $query = $this->db->get_where('materi', array('kode_materi' => $kode_materi))->row();
        // return $query;

        $this->db->select('*');
        $this->db->from('materi');
        $this->db->join('guru', 'guru.nip = materi.nip');
        $this->db->where('kode_materi',$kode_materi);
        $query = $this->db->get();

        return $query;
    }
}
