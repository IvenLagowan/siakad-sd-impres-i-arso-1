<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("M_jadwal");
        $this->load->model("M_hari");
        $this->load->model("M_ruang");
        $this->load->model("M_pelajaran");
        $this->load->model("M_semester");
        $this->load->model("M_guru");
        $this->load->model("M_jam");         
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
    	$data["jadwal"] = $this->M_jadwal->getAll();
        $data["kondisi"] = $this->M_jadwal->Kondisi();
    	$data["jadwal2"] = $this->M_ruang->getAll();
    	$data["jadwal3"] = $this->M_pelajaran->getAll();
    	$data["jadwal4"] = $this->M_semester->getAll();
    	$data["jadwal5"] = $this->M_guru->getAll();
    	$data["jadwal6"] = $this->M_jam->getAll();
    	$data["jadwal7"] = $this->M_hari->getAll();
    	$data['sub'] = 'Tambah Data Jadwal Pelajaran';
    	$data['judul'] = 'Data Jadwal Pelajaran';
    	$jadwal = $this->M_jadwal;         
    	$validation = $this->form_validation;

    	$validation->set_rules($jadwal->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/pelajaran/list_jadwal',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$jadwal->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/Jadwal');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Jadwal');                 
    	$jadwal = $this->M_jadwal;
    	$data["jadwal2"] = $this->M_ruang->getAll();
        $data["jadwal3"] = $this->M_pelajaran->getAll();
        $data["jadwal4"] = $this->M_semester->getAll();
        $data["jadwal5"] = $this->M_guru->getAll();
        $data["jadwal6"] = $this->M_jam->getAll();
        $data["jadwal7"] = $this->M_hari->getAll();         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit Siswa';         
    	$validation->set_rules($jadwal->rules()); 
 
        if ($validation->run()) 
        	{             
        		$jadwal->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["jadwal"] = $jadwal->getById($id);         
        if (!$data["jadwal"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/pelajaran/edit_jadwal", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_jadwal->delete($id)) 
    		{             
    			redirect(site_url('admin/jadwal'));         
    		}     
    	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/admin/Jadwal.php */ 