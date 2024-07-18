<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	private $_table = "jadwal_pelajaran";

    public $ID_JADWAL;
    public $ID_HARI;
    public $ID_RUANG;
    public $KODE_PELAJARAN;
    public $ID_SEMESTER;
    public $ID_PENGAJAR;
    public $ID_JAM;

    public function rules(){ 
        return [
        ['field' => 'ID_HARI',
        'label' => 'ID_HARI',
        'rules' => 'required'], 

        ['field' => 'ID_RUANG',
        'label' => 'ID_RUANG',
        'rules' => 'required'],

        ['field' => 'KODE_PELAJARAN',
        'label' => 'KODE_PELAJARAN',
        'rules' => 'required'],

        ['field' => 'ID_SEMESTER',
        'label' => 'ID_SEMESTER',
        'rules' => 'required'],

        ['field' => 'ID_PENGAJAR',
        'label' => 'ID_PENGAJAR',
        'rules' => 'required'],

        ['field' => 'ID_JAM',
        'label' => 'Hari ID_RUANG',
        'rules' => 'required']
        ];
    } 

    public function Kondisi(){
        $query = "SELECT
    *, 
    jadwal_pelajaran.*, 
    data_hari.NAMA_HARI, 
    data_ruang.NAMA_RUANG, 
    mata_pelajaran.NAMA_PELAJARAN, 
    semester.NAMA_SEMESTER, 
    data_pengajar.NAMA_PENGAJAR, 
    jam.WAKTU
FROM
    jadwal_pelajaran
    INNER JOIN
    data_hari
    ON 
        jadwal_pelajaran.ID_HARI = data_hari.ID_HARI
    INNER JOIN
    data_ruang
    ON 
        jadwal_pelajaran.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    mata_pelajaran
    ON 
        jadwal_pelajaran.KODE_PELAJARAN = mata_pelajaran.KODE_PELAJARAN
    INNER JOIN
    semester
    ON 
        jadwal_pelajaran.ID_SEMESTER = semester.ID_SEMESTER
    INNER JOIN
    data_pengajar
    ON 
        jadwal_pelajaran.ID_PENGAJAR = data_pengajar.ID_PENGAJAR
    INNER JOIN
    jam
    ON 
        jadwal_pelajaran.ID_JAM = jam.ID_JAM";

        return $this->db->query($query)->result();
    }

    public function jadwal()
    {
        $id2 = $this->session->userdata('ID_PENGAJAR');
        $id3 = $this->session->userdata('STATUS');
        $query = "SELECT
    jadwal_pelajaran.*, 
    data_hari.NAMA_HARI, 
    data_pengajar.NAMA_PENGAJAR, 
    data_ruang.NAMA_RUANG, 
    mata_pelajaran.NAMA_PELAJARAN, 
    semester.NAMA_SEMESTER, 
    jam.WAKTU, 
    login.*
FROM
    jadwal_pelajaran
    INNER JOIN
    data_hari
    ON 
        jadwal_pelajaran.ID_HARI = data_hari.ID_HARI
    INNER JOIN
    data_ruang
    ON 
        jadwal_pelajaran.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    mata_pelajaran
    ON 
        jadwal_pelajaran.KODE_PELAJARAN = mata_pelajaran.KODE_PELAJARAN
    INNER JOIN
    semester
    ON 
        jadwal_pelajaran.ID_SEMESTER = semester.ID_SEMESTER
    INNER JOIN
    data_pengajar
    ON 
        jadwal_pelajaran.ID_PENGAJAR = data_pengajar.ID_PENGAJAR
    INNER JOIN
    jam
    ON 
        jadwal_pelajaran.ID_JAM = jam.ID_JAM
    INNER JOIN
    login
    ON 
        data_pengajar.ID_PENGAJAR = login.ID_PENGAJAR
WHERE
    login.ID_PENGAJAR ='$id2'AND
    login.`STATUS` = '$id3'";

        return $this->db->query($query)->result();
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_JADWAL" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();         
        $this->ID_JADWAL = uniqid();         
        $this->ID_HARI = $post["ID_HARI"];  
        $this->ID_RUANG = $post["ID_RUANG"];
        $this->KODE_PELAJARAN = $post["KODE_PELAJARAN"];           
        $this->ID_SEMESTER = $post["ID_SEMESTER"];
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];
        $this->ID_JAM = $post["ID_JAM"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_JADWAL = $post["id"];         
        $this->ID_HARI = $post["ID_HARI"];  
        $this->ID_RUANG = $post["ID_RUANG"];
        $this->KODE_PELAJARAN = $post["KODE_PELAJARAN"];           
        $this->ID_SEMESTER = $post["ID_SEMESTER"];
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];
        $this->ID_JAM = $post["ID_JAM"];                  
        $this->db->update($this->_table, $this, array('ID_JADWAL' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_JADWAL" => $id));     
    }

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */ ?>