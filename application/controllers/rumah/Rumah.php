<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {
	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_pengumuman");  
		$this->load->model("M_jadwal");   
		$this->load->library('form_validation');

		if($this->session->userdata('STATUS') != 'GURU'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                  Anda Belum Login !!!
                </div>');
            redirect('Login/login');
        }   
	} 

    public function index()
    {
    	$data["pengumuman"] = $this->M_pengumuman->getAll();
    	$data["kondisi"] = $this->M_pengumuman->Kondisi();
        $data['judul']='SDN MADE I';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('rumah/konten/index',$data);
        $this->load->view('rumah/footer');
        
    }

    public function jadwal()
    {
    	$data["jadwal"] = $this->M_jadwal->getAll();
    	$data["jadwal2"] = $this->M_jadwal->jadwal();
    	$data['judul']='SDN MADE I';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('rumah/konten/jadwal_belajar',$data);
        $this->load->view('rumah/footer');

    }

}

/* End of file Rumah.php */
