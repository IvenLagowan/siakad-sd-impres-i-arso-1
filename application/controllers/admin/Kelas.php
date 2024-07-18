<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();
        $this->load->model("M_kelas");         
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
    	$data["kelas"] = $this->M_kelas->getAll();
    	$data['sub'] = 'Tambah Data';
    	$data['judul'] = 'Data Tingkat';
    	$kelas = $this->M_kelas;         
    	$validation = $this->form_validation;

    	$validation->set_rules($kelas->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/kelas/list_kelas',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$kelas->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Kelas');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Kelas');                 
    	$kelas = $this->M_kelas;
    	
        $data["kelas"] = $this->M_kelas->getAll();         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit';         
    	$validation->set_rules($kelas->rules()); 
 
        if ($validation->run()) 
        	{             
        		$kelas->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["kelas"] = $kelas->getById($id);         
        if (!$data["kelas"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/kelas/edit_kelas", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_kelas->delete($id)) 
    		{             
    			redirect(site_url('admin/Kelas'));         
    		}     
    	} 

}

/* End of file Kelas.php */
/* Location: ./application/controllers/admin/Kelas.php */ ?>