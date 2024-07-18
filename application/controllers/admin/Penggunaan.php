<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunaan extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_penggunaan");         
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
        $data["kondisi"] = $this->M_penggunaan->getKondisi();
    	$data["pengguna"] = $this->M_penggunaan->getAll();
    	$data["pengguna2"] = $this->M_penggunaan->getKepala();
    	$data['sub'] = 'Tambah Data pengguna';
    	$data['judul'] = 'Data pengguna';
    	$pengguna = $this->M_penggunaan;         
    	$validation = $this->form_validation;

    	$validation->set_rules($pengguna->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/pengaturan/list_pengguna',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$pengguna->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Penggunaan');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Penggunaan');                 
    	$pengguna = $this->M_penggunaan;
    	$data["pengguna2"] = $this->M_penggunaan->getKepala();       
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit pengguna';         
    	$validation->set_rules($pengguna->rules()); 
 
        if ($validation->run()) 
        	{             
        		$pengguna->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["pengguna"] = $pengguna->getById($id);         
        if (!$data["pengguna"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/pengaturan/edit_pengguna", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_penggunaan->delete($id)) 
    		{             
    			redirect(site_url('admin/Penggunaan'));         
    		}     
    	} 

}

/* End of file Penggunaan.php */
/* Location: ./application/controllers/admin/Penggunaan.php */