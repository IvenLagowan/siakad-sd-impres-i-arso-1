<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model {

	private $_table = "absensi_kelas";

    public $ID_ABSENSI;
    public $ID_SISWA;
    public $TGL;
    public $KETERANGAN;

    public function rules(){ 
        return [ 

        ['field' => 'ID_SISWA',
        'label' => 'ID_SISWA',
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
        return $this->db->get_where($this->_table, ["ID_ABSENSI" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();       
        $this->ID_SISWA = $post["ID_SISWA"];
        $this->TGL = date_default_timezone_set("Asia/Bangkok"); 
        $this->KETERANGAN = $post["KETERANGAN"];                
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_ABSENSI = $post["id"]; 
        $this->ID_SISWA = $post["ID_SISWA"];
        $this->TGL = $post["TGL"]; 
        $this->KETERANGAN = $post["KETERANGAN"];                 
        $this->db->update($this->_table, $this, array('ID_ABSENSI' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_ABSENSI" => $id));     
    }

}

/* End of file M_absen.php */
/* Location: ./application/models/M_absen.php */