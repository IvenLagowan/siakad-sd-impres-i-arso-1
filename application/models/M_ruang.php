<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruang extends CI_Model {

	private $_table = "data_ruang";

    public $ID_RUANG;
    public $NAMA_RUANG;

    public function rules(){ 
        return [ 

        ['field' => 'NAMA_RUANG',
        'label' => 'Ruang',
        'rules' => 'required']
        ];
    }
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_RUANG" => $id])->row();
    }

    public function save()     
    {         
        $post = $this->input->post();        
        $this->NAMA_RUANG = $post["NAMA_RUANG"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_RUANG = $post["id"];         
        $this->NAMA_RUANG = $post["NAMA_RUANG"];                 
        $this->db->update($this->_table, $this, array('ID_RUANG' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_RUANG" => $id));     
    }

}

/* End of file M_ruang.php */
/* Location: ./application/models/M_ruang.php */ ?>