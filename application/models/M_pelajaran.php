<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelajaran extends CI_Model {
    private $_table = "mata_pelajaran"; 

    public $KODE_PELAJARAN;
    public $NAMA_PELAJARAN;
    public $KURIKULUM;

    public function rules(){ 
        return [
        ['field' => 'NAMA_PELAJARAN',
        'label' => 'Nama Pelajaran',
        'rules' => 'required'], 

        ['field' => 'KURIKULUM',
        'label' => 'Kurikulum',
        'rules' => 'required']
        ];
    } 

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["KODE_PELAJARAN" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();         
        $this->KODE_PELAJARAN = uniqid();         
        $this->NAMA_PELAJARAN = $post["NAMA_PELAJARAN"];         
        $this->KURIKULUM = $post["KURIKULUM"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->KODE_PELAJARAN = $post["id"];         
        $this->NAMA_PELAJARAN = $post["NAMA_PELAJARAN"];         
        $this->KURIKULUM = $post["KURIKULUM"];                  
        $this->db->update($this->_table, $this, array('KODE_PELAJARAN' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("KODE_PELAJARAN" => $id));     
    }

}

/* End of file Controllername.php */
