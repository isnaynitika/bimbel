<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Murid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMurid');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation', 'upload');
        $this->load->database();
    }

    public function index()
    {
        $data['judul'] = "Murid | Home";
        $data['murid'] = $this->ModelMurid->getData()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('murid/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto/murid';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama' => $nama,
            'nis' => $nis,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'foto' => $foto
        );

        $this->session->set_flashdata('flash', 'Input data siswa berhasil');
        $this->ModelMurid->inputData($data, 'murid');
        redirect('murid/index');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('flash', 'Hapus data siswa berhasil');
        $this->ModelMurid->hapusData($id);
        redirect('murid/index');
    }

    public function edit($id)
    {
        $data['judul'] = "Murid | Edit Data";
        $where = array('id' => $id);
        $data['murid'] = $this->ModelMurid->editData($where, 'murid')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('murid/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        // $foto = $_FILES['foto'];
        // if ($foto = '') {
        // } else {
        //     $config['upload_path'] = './assets/foto/murid';
        //     $config['allowed_types'] = 'jpg|png|gif';
        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('foto')) {
        //         echo "Upload Gagal";
        //         die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'nama' => $nama,
            'nis' => $nis,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            // 'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->session->set_flashdata('flash', 'Edit data siswa berhasil');
        $this->ModelMurid->updateData($where, $data, 'murid');
        redirect('murid/index');
    }

    public function detail($id)
    {
        $data['judul'] = "Murid | Detail Data";
        $detail = $this->ModelMurid->detailData($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('murid/detail', $data);
        $this->load->view('templates/footer');
    }
}
