<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMurid');
        $this->load->model('ModelKelas');
        $this->load->model('ModelPembelian');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation', 'upload');
        $this->load->database();
    }

    public function index()
    {
        $data['judul'] = "Pembelian | Home";
        $data['murid'] = $this->ModelMurid->getData()->result();
        $data['kelas'] = $this->ModelKelas->getData()->result();
        $data['pembelian'] = $this->ModelPembelian->getData()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pembelian/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $id_pembelian = $this->input->post('id_pembelian');
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'nama' => $nama,
            'nis' => $nis,
            'id_pembelian' => $id_pembelian,
            'id_kelas' => $id_kelas,
            'nama_kelas' => $nama_kelas,

        );

        $this->session->set_flashdata('flash', 'Input data pembelian berhasil');
        $this->ModelPembelian->inputData($data, 'pembelian');
        redirect('pembelian/index');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('flash', 'Hapus data pembelian berhasil');
        $this->ModelPembelian->hapusData($id);
        redirect('pembelian/index');
    }

    public function edit($id_pembelian)
    {
        $data['judul'] = "Pembelian| Edit Data";
        $where = array('id_pembelian' => $id_pembelian);
        $data['murid'] = $this->ModelMurid->getData()->result();
        $data['kelas'] = $this->ModelKelas->getData()->result();
        $data['pembelian'] = $this->ModelPembelian->editData($id_pembelian, 'pembelian')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pembelian/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $id_pembelian = $this->input->post('id_pembelian');
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'nama' => $nama,
            'nis' => $nis,
            'id_pembelian' => $id_pembelian,
            'id_kelas' => $id_kelas,
            'nama_kelas' => $nama_kelas,

        );

        $where = array(
            'id_pembelian' => $id_pembelian
        );
        $this->session->set_flashdata('flash', 'Edit data siswa berhasil');
        $this->ModelPembelian->updateData($where, $data, 'pembelian');
        redirect('pembelian/index');
    }

    public function detail($id_pembelian)
    {
        $data['judul'] = "Pembelian | Detail Data";
        $data['detail'] = $this->ModelPembelian->detailData($id_pembelian)->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pembelian/detail', $data);
        $this->load->view('templates/footer');
    }
}
