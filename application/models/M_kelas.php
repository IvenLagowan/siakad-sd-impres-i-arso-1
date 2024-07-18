<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	private $_table = "kelas";

    public $ID_KELAS;
    public $TINGKAT_KELAS;
    public $KETERANGAN;

    public function rules(){ 
        return [ 

        ['field' => 'TINGKAT_KELAS',
        'label' => 'Tingkat Kelas',
        'rules' => 'required'],

        ['field' => 'KETERANGAN',
        'label' => 'KETERANGAN',
        'rules' => 'required']
        ];
    } 
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_KELAS" => $id])->row();
    }

    public function save()     
    {         
        $post = $this->input->post();        
        $this->TINGKAT_KELAS = $post["TINGKAT_KELAS"];         
        $this->KETERANGAN = $post["KETERANGAN"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_KELAS = $post["id"];         
        $this->TINGKAT_KELAS = $post["TINGKAT_KELAS"];         
        $this->KETERANGAN = $post["KETERANGAN"];                  
        $this->db->update($this->_table, $this, array('ID_KELAS' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_KELAS" => $id));     
    }
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */