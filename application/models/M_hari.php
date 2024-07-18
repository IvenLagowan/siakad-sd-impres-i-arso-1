<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hari extends CI_Model {

	private $_table = "data_hari";

    private $ID_HARI;
    private $NAMA_HARI;
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_HARI" => $id])->row();
    }
	

}

/* End of file M_hari.php */
/* Location: ./application/models/M_hari.php */ ?>