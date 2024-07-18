<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

	private $_table = "profil_sekolah"; 
	private $_table2 = "data_pengajar"; 

    public $NSS;
    public $ID_PENGAJAR;
    public $NAMA_SEKOLAH;
    public $TGL_PENDIRIAN;
    public $STATUS_SEKOLAH;
    public $AKREDITASI;
    public $ALAMAT_SEKOLAH;
    public $EMAIL;

    public function rules(){ 
        return [
        ['field' => 'NAMA_SEKOLAH',
        'label' => 'Nama Sekolah',
        'rules' => 'required'],

        ['field' => 'TGL_PENDIRIAN',
        'label' => 'Tanggal Pendirian',
        'rules' => 'required'],

        ['field' => 'STATUS_SEKOLAH',
        'label' => 'Status Sekolah',
        'rules' => 'required'],

        ['field' => 'AKREDITASI',
        'label' => 'Akreditasi',
        'rules' => 'required'],

        ['field' => 'EMAIL',
        'label' => 'Email',
        'rules' => 'required']
        ];
    } 

    public function Kondisi(){
        $query = "SELECT
    *, 
    profil_sekolah.*, 
    data_pengajar.NAMA_PENGAJAR
FROM
    profil_sekolah
    INNER JOIN
    data_pengajar
    ON 
        profil_sekolah.ID_PENGAJAR = data_pengajar.ID_PENGAJAR";

        return $this->db->query($query)->result();
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getKepala(){
        return $this->db->get($this->_table2)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["NSS" => $id])->row();
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->NSS = $post["id"];         
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];  
        $this->NAMA_SEKOLAH = $post["NAMA_SEKOLAH"];
        $this->TGL_PENDIRIAN = $post["TGL_PENDIRIAN"];           
        $this->STATUS_SEKOLAH = $post["STATUS_SEKOLAH"];
        $this->AKREDITASI = $post["AKREDITASI"]; 
        $this->ALAMAT_SEKOLAH = $post["ALAMAT_SEKOLAH"];                
        $this->EMAIL = $post["EMAIL"];
        $this->db->update($this->_table, $this, array('NSS' => $post['id']));     
    }

}

/* End of file M_profil.php */
/* Location: ./application/models/M_profil.php */ 