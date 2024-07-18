<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	private $_table = "data_pengajar"; 

    public $ID_PENGAJAR;
    public $NIP;
    public $NAMA_PENGAJAR;
    public $ALAMAT_PENGAJAR;
    public $JK;
    public $FOTO = "default.jpg";

    public function rules(){ 
        return [
        ['field' => 'NAMA_PENGAJAR',
        'label' => 'Nama Pengajar',
        'rules' => 'required'],

        ['field' => 'NIP',
        'label' => 'NIP',
        'rules' => 'required'], 

        ['field' => 'ALAMAT_PENGAJAR',
        'label' => 'Alamat',
        'rules' => 'required'],

        ['field' => 'JK',
        'label' => 'Usia',
        'rules' => 'required']
        ];
    } 

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_PENGAJAR" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();         
        $this->ID_PENGAJAR = uniqid();         
        $this->NIP = $post["NIP"];
        $this->NAMA_PENGAJAR = $post["NAMA_PENGAJAR"];         
        $this->ALAMAT_PENGAJAR = $post["ALAMAT_PENGAJAR"];
        $this->JK = $post["JK"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_PENGAJAR = $post["id"];         
        $this->NIP = $post["NIP"];
        $this->NAMA_PENGAJAR = $post["NAMA_PENGAJAR"];         
        $this->ALAMAT_PENGAJAR = $post["ALAMAT_PENGAJAR"];
        $this->JK = $post["JK"];                  
        $this->db->update($this->_table, $this, array('ID_PENGAJAR' => $post['id']));     
    } 

    public function delete($id){        
		$idm = 'ID_PENGAJAR'; 
        return $this->db->delete($this->_table, [$idm => $id]);     
    }

}

/* End of file M_guru.php */
/* Location: ./application/models/M_guru.php */
