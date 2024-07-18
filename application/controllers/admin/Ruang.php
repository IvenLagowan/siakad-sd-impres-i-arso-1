<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();
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
    	$data["ruang"] = $this->M_ruang->getAll();
    	$data['sub'] = 'Tambah Data';
    	$data['judul'] = 'Data Ruang';
    	$ruang = $this->M_ruang;         
    	$validation = $this->form_validation;

    	$validation->set_rules($ruang->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/ruang/list_ruang',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$ruang->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Ruang');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Ruang');                 
    	$ruang = $this->M_ruang;
    	
        $data["ruang"] = $this->M_ruang->getAll();         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit';         
    	$validation->set_rules($ruang->rules()); 
 
        if ($validation->run()) 
        	{             
        		$ruang->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["ruang"] = $ruang->getById($id);         
        if (!$data["ruang"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/ruang/edit_ruang", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_ruang->delete($id)) 
    		{             
    			redirect(site_url('admin/Ruang'));         
    		}     
    	} 

}

/* End of file Ruang.php */
/* Location: ./application/controllers/admin/Ruang.php */ ?>