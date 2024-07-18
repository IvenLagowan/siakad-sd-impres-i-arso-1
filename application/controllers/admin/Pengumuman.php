<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();
        $this->load->model("M_pengumuman"); 
        $this->load->model("M_tahun");
        $this->load->model("M_semester");         
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
    	$data["pengumuman"] = $this->M_pengumuman->getAll();
    	$data["tahun"] = $this->M_tahun->getAll();
    	$data["semester"] = $this->M_semester->getAll();
    	$data["kondisi"] = $this->M_pengumuman->Kondisi();
    	$data['sub'] = 'Tambah Data';
    	$data['judul'] = 'Pengumuman';
    	$pengumuman = $this->M_pengumuman;         
    	$validation = $this->form_validation;

    	$validation->set_rules($pengumuman->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/pengumuman/list',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$pengumuman->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Pengumuman');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	$data["tahun"] = $this->M_tahun->getAll();
    	$data["semester"] = $this->M_semester->getAll();
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Pengumuman');                 
    	$pengumuman = $this->M_pengumuman;        
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit';         
    	$validation->set_rules($pengumuman->rules()); 
 
        if ($validation->run()) 
        	{             
        		$pengumuman->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["pengumuman"] = $pengumuman->getById($id);         
        if (!$data["pengumuman"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/pengumuman/pengumuman", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_pengumuman->delete($id)) 
    		{             
    			redirect(site_url('admin/Pengumuman'));         
    		}     
    	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/admin/Pengumuman.php */ ?>