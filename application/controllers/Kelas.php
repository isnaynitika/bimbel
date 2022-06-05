<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKelas');
        $this->load->model('ModelMateri');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation', 'upload');
        $this->load->database();
    }

    public function index()
    {
        $data['judul'] = "Kelas | Home";
        $data['kelas'] = $this->ModelKelas->getData()->result();
        $data['materi'] = $this->ModelMateri->getData()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $nama_kelas = $this->input->post('nama_kelas');
        $id_kelas = $this->input->post('id_kelas');
        $kode_materi = $this->input->post('kode_materi');
        $nama_materi = $this->input->post('nama_materi');
        $harga = $this->input->post('harga');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto/kelas';
            $config['allowed_types'] = 'jpg|png|gif|jpeg|jfif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                redirect('kelas/index');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kelas' => $nama_kelas,
            'id_kelas' => $id_kelas,
            'kode_materi' => $kode_materi,
            'nama_materi' => $nama_materi,
            'harga' => $harga,
            'foto' => $foto,

        );

        // var_dump($data);
        $this->session->set_flashdata('flash', 'Input data kelas berhasil');
        $this->ModelKelas->inputData($data, 'kelas');
        redirect('kelas/index');
    }

    public function hapus($id_kelas)
    {
        $this->session->set_flashdata('flash', 'Hapus data kelas berhasil');
        $this->ModelKelas->hapusData($id_kelas);
        redirect('kelas/index');
    }

    public function edit($id_kelas)
    {
        $data['judul'] = "Kelas| Edit Data";
        // $where = array('id' => $id);
        $data['materi'] = $this->ModelMateri->getData()->result();
        $data['kelas'] = $this->ModelKelas->editData($id_kelas, 'kelas')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_kelas = $this->input->post('nama_kelas');
        $id_kelas = $this->input->post('id_kelas');
        $kode_materi = $this->input->post('kode_materi');
        $nama_materi = $this->input->post('nama_materi');
        $harga = $this->input->post('harga');
        // $foto = $_FILES['foto'];
        // if ($foto = '') {
        // } else {
        //     $config['upload_path'] = './assets/foto/kelas';
        //     $config['allowed_types'] = 'jpg|png|gif|jpeg|jfif';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('foto')) {
        //         echo "Upload Gagal";
        //         die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'nama_kelas' => $nama_kelas,
            'id_kelas' => $id_kelas,
            'kode_materi' => $kode_materi,
            'nama_materi' => $nama_materi,
            'harga' => $harga,
            // 'foto' => $foto
        );

        $where = array(
            'id_kelas' => $id_kelas
        );
        $this->session->set_flashdata('flash', 'Edit data kelas berhasil');
        $this->ModelKelas->updateData($where, $data, 'kelas');
        redirect('kelas/index');
    }

    public function detail($id_kelas)
    {
        $data['judul'] = "Kelas | Detail Data";
        $detail = $this->ModelKelas->detailData($id_kelas)->result();
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/detail', $data);
        $this->load->view('templates/footer');
    }
}
