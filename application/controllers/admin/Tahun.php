<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();
        $this->load->model("M_tahun");         
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
    	$data["tahun"] = $this->M_tahun->getAll();
    	$data['sub'] = 'Tambah Data';
    	$data['judul'] = 'Data Tahun Ajaran';
    	$tahun = $this->M_tahun;         
    	$validation = $this->form_validation;

    	$validation->set_rules($tahun->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/tahun/list_tahun',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$tahun->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Tahun');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Tahun');                 
    	$tahun = $this->M_tahun;
    	
        $data["tahun"] = $this->M_tahun->getAll();         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit';         
    	$validation->set_rules($tahun->rules()); 
 
        if ($validation->run()) 
        	{             
        		$tahun->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["tahun"] = $tahun->getById($id);         
        if (!$data["tahun"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/tahun/edit_tahun", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_tahun->delete($id)) 
    		{             
    			redirect(site_url('admin/Tahun'));         
    		}     
    	} 

}

/* End of file Tahun.php */
/* Location: ./application/controllers/admin/Tahun.php */ ?>