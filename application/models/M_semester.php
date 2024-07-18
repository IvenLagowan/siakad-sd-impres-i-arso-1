<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_semester extends CI_Model {

	private $_table = "semester";

    private $ID_SEMESTER;
    private $NAMA_SEMESTER;
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_SEMESTER" => $id])->row();
    }
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */