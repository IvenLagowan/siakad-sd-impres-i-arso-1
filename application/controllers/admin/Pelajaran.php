<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_pelajaran");         
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
    	$data["belajar"] = $this->M_pelajaran->getAll();
    	$data['sub'] = 'Tambah Mata Pelajaran';
    	$data['judul'] = 'Mata Pelajaran';
    	$belajar = $this->M_pelajaran;         
    	$validation = $this->form_validation;

    	$validation->set_rules($belajar->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/pelajaran/list_pelajaran',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$belajar->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Pelajaran');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Pelajaran');                 
    	$belajar = $this->M_pelajaran;         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit Pelajaran';         
    	$validation->set_rules($belajar->rules()); 
 
        if ($validation->run()) 
        	{             
        		$belajar->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["belajar"] = $belajar->getById($id);         
        if (!$data["belajar"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/pelajaran/edit_pelajaran", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_pelajaran->delete($id)) 
    		{             
    			redirect(site_url('admin/Pelajaran'));         
    		}     
    	} 

}

/* End of file Pelajaran.php */
/* Location: ./application/controllers/admin/Pelajaran.php */