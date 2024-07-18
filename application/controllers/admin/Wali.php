<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {

	public function __construct()     
	{         
		parent::__construct();
        $this->load->model("M_ruang"); 
        $this->load->model("M_guru");
        $this->load->model("M_wali");          
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
    	$data["guru"] = $this->M_guru->getAll();
    	$data["wali"] = $this->M_wali->getAll();
    	$data["kondisi"] = $this->M_wali->Kondisi();
    	$data['sub'] = 'Tambah Data';
    	$data['judul'] = 'Data Wali Kelas';
    	$wali = $this->M_wali;         
    	$validation = $this->form_validation;

    	$validation->set_rules($wali->rules()); 
 
        if ($validation->run() == FALSE) {             
        	$this->load->view('admin/header',$data);
	        $this->load->view('admin/sidebar');
	        $this->load->view('admin/konten/wali/list_wali',$data);
	        $this->load->view('admin/footer');      
        } else {
        	$wali->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');
        	redirect('admin/wali');
        } 
    }       
 
    public function edit($id = null)     
    {         
    	$data["guru"] = $this->M_guru->getAll();
    	$data["ruang"] = $this->M_ruang->getAll();
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/wali');                 
    	$wali = $this->M_wali;
    	         
    	$validation = $this->form_validation;
    	$data['judul'] = 'Edit';         
    	$validation->set_rules($wali->rules()); 
 
        if ($validation->run()) 
        	{             
        		$wali->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["wali"] = $wali->getById($id);         
        if (!$data["wali"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("admin/konten/wali/edit_wali", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if (!isset($id)) show_404();                  
    	if ($this->M_wali->delete($id)) 
    		{             
    			redirect(site_url('admin/wali'));         
    		}     
    	}

}

/* End of file Wali.php */
/* Location: ./application/controllers/admin/Wali.php */ ?>