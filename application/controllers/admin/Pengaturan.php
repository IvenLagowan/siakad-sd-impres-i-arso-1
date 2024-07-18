<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_profil");         
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
    	$data["profil"] = $this->M_profil->getAll();
        $data["kondisi"] = $this->M_profil->Kondisi();
    	$data["profil2"] = $this->M_profil->getKepala();
    	$data['judul'] = 'Data Profil Sekolah';
    	$profil = $this->M_profil;         
    	$validation = $this->form_validation;

    	$validation->set_rules($profil->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/pengaturan/profil_sekolah',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$profil->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Profil');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Profil');                 
    	$profil = $this->M_profil;
    	$data["profil2"] = $this->M_profil->getKepala();         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit Profil';         
    	$validation->set_rules($profil->rules()); 
 
        if ($validation->run()) 
        	{             
        		$profil->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["profil"] = $profil->getById($id);         
        if (!$data["profil"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/pengaturan/edit_profil", $data); 
        $this->load->view('admin/footer');                              
    } 

}

/* End of file Profil.php */
/* Location: ./application/controllers/admin/Profil.php */