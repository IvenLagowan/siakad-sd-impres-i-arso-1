<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jam extends CI_Model {

	private $_table = "jam";

    private $ID_JAM;
    private $WAKTU;
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_JAM" => $id])->row();
    }

}

/* End of file M_jam.php */
/* Location: ./application/models/M_jam.php */ ?>