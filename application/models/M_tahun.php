<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahun extends CI_Model {

	private $_table = "tahun_ajaran";

    public $ID_TAHUN;
    public $TAHUN_AJARAN;

    public function rules(){ 
        return [ 

        ['field' => 'TAHUN_AJARAN',
        'label' => 'Tahun Akademik',
        'rules' => 'required']
        ];
    } 
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_TAHUN" => $id])->row();
    }

    public function save()     
    {         
        $post = $this->input->post();        
        $this->TAHUN_AJARAN = $post["TAHUN_AJARAN"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_TAHUN = $post["id"];         
        $this->TAHUN_AJARAN = $post["TAHUN_AJARAN"];                  
        $this->db->update($this->_table, $this, array('ID_TAHUN' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_TAHUN" => $id));     
    }

}

/* End of file M_tahun.php */
/* Location: ./application/models/M_tahun.php */ ?>