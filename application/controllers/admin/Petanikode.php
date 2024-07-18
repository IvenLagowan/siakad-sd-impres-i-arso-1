<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Petanikode extends CI_Controller {     
	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("Model_petanikode");         
		$this->load->library('form_validation');     
	} 
 
    public function index()     
    {         
    	$data["products"] = $this->Model_petanikode->getAll();
    	$data['judul'] = 'petakode CRUD';         
    	$this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view('petanikode/list',$data);
        $this->load->view('admin/footer');     
    } 
 
    public function add()     
    {         
    	$product = $this->Model_petanikode;         
    	$validation = $this->form_validation;
    	$data['judul'] = 'petakode CRUD';          
    	$validation->set_rules($product->rules()); 
 
        if ($validation->run()) 
        {             
        	$product->save();             
        	$this->session->set_flashdata('success', 'Berhasil disimpan');         
        } 
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("petanikode/new_form"); 
        $this->load->view('admin/footer');
            
    } 
 
    public function edit($id = null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}

    	if (!isset($id)) redirect('admin/Petanikode');                 
    	$product = $this->Model_petanikode;         
    	$validation = $this->form_validation;
    	$data['judul'] = 'petakode CRUD';         
    	$validation->set_rules($product->rules()); 
 
        if ($validation->run()) 
        	{             
        		$product->update();             
        		$this->session->set_flashdata('success', 'Berhasil disimpan');         
        	} 
 
        $data["products"] = $product->getById($id);         
        if (!$data["products"]) show_404();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $this->load->view("petanikode/edit_form", $data); 
        $this->load->view('admin/footer');                              
    } 
 
    public function delete($id=null)     
    {         
    	if(!isset($id))
    	{
    		$id = $this->input->post('id');
    	}
    	if (!isset($id)) show_404();                  
    	if ($this->Model_petanikode->delete($id)) 
    		{             
    			redirect(site_url('admin/Petanikode'));         
    		}     
    	} 
    } 
