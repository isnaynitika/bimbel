<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelGuru');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation', 'upload');
        $this->load->database();
    }

    public function index()
    {
        $data['judul'] = "Guru | Home";
        $data['guru'] = $this->ModelGuru->getData()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $nama_guru = $this->input->post('nama_guru');
        $nip = $this->input->post('nip');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto/guru';
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
            'nama_guru' => $nama_guru,
            'nip' => $nip,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'foto' => $foto
        );

        $this->session->set_flashdata('flash', 'Input data guru berhasil');
        $this->ModelGuru->inputData($data, 'guru');
        redirect('guru/index');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('flash', 'Hapus data guru berhasil');
        $this->ModelGuru->hapusData($id);
        redirect('guru/index');
    }

    public function edit($id)
    {
        $data['judul'] = "Guru| Edit Data";
        $where = array('id' => $id);
        $data['guru'] = $this->ModelGuru->editData($where, 'guru')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('guru/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_guru = $this->input->post('nama_guru');
        $nip = $this->input->post('nip');
        $jk = $this->input->post('jk');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        // $foto = $_FILES['foto'];
        // if ($foto = '') {
        // } else {
        //     $config['upload_path'] = './assets/foto/guru';
        //     $config['allowed_types'] = 'jpg|png|gif|jpeg';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('foto')) {
        //         echo "Upload Gagal";
        //         die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'nama_guru' => $nama_guru,
            'nip' => $nip,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            // 'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->session->set_flashdata('flash', 'Edit data guru berhasil');
        $this->ModelGuru->updateData($where, $data, 'guru');
        redirect('guru/index');
    }

    public function detail($id)
    {
        $data['judul'] = "Guru | Detail Data";
        $detail = $this->ModelGuru->detailData($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('guru/detail', $data);
        $this->load->view('templates/footer');
    }
}
