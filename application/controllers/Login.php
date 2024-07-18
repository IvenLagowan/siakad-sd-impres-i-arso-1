<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_login");       
		$this->load->library('form_validation');     
	} 

	public function login()
	{
		$this->form_validation->set_rules('USERNAME', 'USERNAME', 'required',['required' => 'Username wajib diisi !!!']);
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required',['required' => 'Password wajib diisi !!!']);
		if($this->form_validation->run()==FALSE)
		{
			$data['judul'] = 'Sistem Informasi Akademik';
			$this->load->view('login/login',$data);
		}else{
			$auth = $this->M_login->cek_login();
			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				  Username atau Password anda salah !!!
				</div>');
				redirect('Login/login');
			}else{
				$this->session->set_userdata('ID_PENGAJAR',$auth->ID_PENGAJAR);

				$this->session->set_userdata('STATUS',$auth->STATUS );

				switch ($auth->STATUS) {
					case 'ADMIN' : redirect('admin/Admin');
						break;
					
					case 'GURU' : redirect('rumah/Rumah');
						break;

						default : ;break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login/login');
	}

	public function lupa()
	{
		$data['judul'] = 'Sistem Informasi Akademik';
		$this->load->view('product/sao',$data);
	}
}