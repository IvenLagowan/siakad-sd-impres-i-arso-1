<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_kelas extends CI_Controller {
	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_siswa");
        $this->load->model("M_kota");
        $this->load->model("M_kelas");        
        $this->load->model("M_ruang");                
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
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas1();

        $data['judul']='KELAS 1';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    }  

    public function kelas2()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas2();

        $data['judul']='KELAS 2';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    } 

    public function kelas3()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas3();

        $data['judul']='KELAS 3';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    }

    public function kelas4()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas4();

        $data['judul']='KELAS 4';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    }

    public function kelas5()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas5();

        $data['judul']='KELAS 5';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    } 

    public function kelas6()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas6();

        $data['judul']='KELAS 6';
        $this->load->view('rumah/header',$data);
        $this->load->view('rumah/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('rumah/footer');
    }

}

/* End of file absen_kelas.php */
/* Location: ./application/controllers/rumah/absen_kelas.php */ ?>