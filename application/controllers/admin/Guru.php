<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_guru");         
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
    	$data["pengajar"] = $this->M_guru->getAll();
    	$data['sub'] = 'Tambah Data Guru';
    	$data['judul'] = 'Data Guru';
    	$pengajar = $this->M_guru;         
    	$validation = $this->form_validation;

    	$validation->set_rules($pengajar->rules()); 
 
        if ($validation->run() == FALSE) {     
			$this->session->set_flashdata('danger', 'GAGAL');
        	$this->load->view('admin/header',$data); 
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/guru/list_guru',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$pengajar->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Guru');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Guru');                 
    	$pengajar = $this->M_guru;         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit Guru';         
    	$validation->set_rules($pengajar->rules()); 
 
        if ($validation->run()) 
        	{             
        		$pengajar->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["pengajar"] = $pengajar->getById($id);         
        if (!$data["pengajar"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/guru/edit_guru", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_guru->delete($id)) 
    		{             
    			redirect('admin/Guru');         
    		}     
    	} 

}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */
