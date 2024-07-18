<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {

	private $_table = "data_kota";

    private $ID_KOTA;
    private $NAMA_KOTA;
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_KOTA" => $id])->row();
    }
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */