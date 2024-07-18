<?php

defined('BASEPATH') or exit('no direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('STATUS') != 'ADMIN'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                  Anda Belum Login !!!
                </div>');
            redirect('Login/login');
        }
    }
    

    public function index()
    {
        $data['judul']='SI Akademik Admin';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/dashboard');
        $this->load->view('admin/footer');
    }
}