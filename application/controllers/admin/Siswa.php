<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_siswa");
        $this->load->model("M_kota");
        $this->load->model("M_kelas");        
        $this->load->model("M_ruang");                
		$this->load->library('form_validation');   

        if($this->session->userdata('STATUS') != 'ADMIN'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                  Anda Belum Login !!!
                </div>');
            redirect('Login/login');
        }  
	} 
 
    public function index()     
    {         
        $data["kondisi"] = $this->M_siswa->getKondisi();
    	$data["siswa"] = $this->M_siswa->getAll();
    	$data["siswa2"] = $this->M_kota->getAll();
        $data["siswa3"] = $this->M_kelas->getAll();
        $data["siswa4"] = $this->M_ruang->getAll();
    	$data['sub'] = 'Tambah Data Siswa';
    	$data['judul'] = 'Data Siswa';
    	$siswa = $this->M_siswa;         
    	$validation = $this->form_validation;

    	$validation->set_rules($siswa->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/siswa/list_siswa',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$siswa->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Siswa');
        } 
    }

    public function kelas1()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas1();

        $data['judul']='KELAS 1';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    }  

    public function kelas2()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas2();

        $data['judul']='KELAS 2';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    } 

    public function kelas3()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas3();

        $data['judul']='KELAS 3';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    }

    public function kelas4()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas4();

        $data['judul']='KELAS 4';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    }

    public function kelas5()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas5();

        $data['judul']='KELAS 5';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    } 

    public function kelas6()     
    {         
        
        $data["siswa"] = $this->M_siswa->getAll();
        $data["kondisi"] = $this->M_siswa->kelas6();

        $data['judul']='KELAS 6';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/konten/absen_kelas/list_absen',$data);
        $this->load->view('admin/footer');
    }         
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Siswa');                 
    	$siswa = $this->M_siswa;
    	$data["siswa"] = $this->M_siswa->getAll();
        $data["siswa2"] = $this->M_kota->getAll();
        $data["siswa3"] = $this->M_kelas->getAll();
        $data["siswa4"] = $this->M_ruang->getAll();        
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit Siswa';         
    	$validation->set_rules($siswa->rules()); 
 
        if ($validation->run()) 
        	{             
        		$siswa->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["siswa"] = $siswa->getById($id);         
        if (!$data["siswa"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/siswa/edit_siswa", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_siswa->delete($id)) 
    		{             
    			redirect(site_url('admin/Siswa'));         
    		}     
    	} 

}

/* End of file Siswa.php */
/* Location: ./application/controllers/admin/Siswa.php */