<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelGuru');
        $this->load->model('ModelMateri');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation', 'upload');
        $this->load->database();
    }

    public function index()
    {
        $data['judul'] = "Materi | Home";
        $data['guru'] = $this->ModelGuru->getData()->result();
        $data['materi'] = $this->ModelMateri->getData()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('materi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $nama_materi = $this->input->post('nama_materi');
        $kode_materi = $this->input->post('kode_materi');
        $nip = $this->input->post('nip');
        $nama_guru = $this->input->post('nama_guru');
        $isi = $this->input->post('isi');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/file';
            $config['allowed_types'] = 'pdf|docx|txt|xls';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "Upload Gagal";
                die();
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_materi' => $nama_materi,
            'kode_materi' => $kode_materi,
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'isi' => $isi,
            'file' => $file,

        );

        $this->session->set_flashdata('flash', 'Input data materi berhasil');
        $this->ModelMateri->inputData($data, 'materi');
        redirect('materi/index');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('flash', 'Hapus data materi berhasil');
        $this->ModelMateri->hapusData($id);
        redirect('materi/index');
    }

    public function edit($kode_materi)
    {
        $data['judul'] = "Materi| Edit Data";
        $where = array('kode_materi' => $kode_materi);
        $data['guru'] = $this->ModelGuru->getData()->result();
        $data['materi'] = $this->ModelMateri->editData($kode_materi)->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('materi/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_materi = $this->input->post('nama_materi');
        $kode_materi = $this->input->post('kode_materi');
        $nip = $this->input->post('nip');
        $nama_guru = $this->input->post('nama_guru');
        $isi = $this->input->post('isi');
        // $file = $_FILES['file'];
        // if ($file = '') {
        // } else {
        //     $config['upload_path'] = './assets/file';
        //     $config['allowed_types'] = 'pdf|doc|txt|xls';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('file')) {
        //         echo "Upload Gagal";
        //         die();
        //     } else {
        //         $file = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'nama_materi' => $nama_materi,
            'kode_materi' => $kode_materi,
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'isi' => $isi,
            // 'file' => $file
        );

        $where = array(
            'kode_materi' => $kode_materi
        );
        // var_dump($data);
        $this->session->set_flashdata('flash', 'Edit data materi berhasil');
        $this->ModelMateri->updateData($where, $data, 'materi');
        redirect('materi/index');
    }

    public function detail($kode_materi)
    {
        $data['judul'] = "Materi | Detail Data";
        $detail = $this->ModelMateri->detailData($kode_materi)->result();
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('materi/detail', $data);
        $this->load->view('templates/footer');
    }
}
