<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	private $_table = "data_siswa"; 

    public $NIS;
    public $NAMA_SISWA;
    public $ID_KELAS;
    public $ID_RUANG;
    public $ID_KOTA;
    public $JENIS_KELAMIN;
    public $WALI_MURID;
    public $ALAMAT_SISWA;
    public $FOTO_SISWA = "default.jpg";
    

    public function rules(){ 
        return [
        ['field' => 'NAMA_SISWA',
        'label' => 'Nama Siswa',
        'rules' => 'required'], 

        ['field' => 'ID_KOTA',
        'label' => 'Kota',
        'rules' => 'required'],

        ['field' => 'JENIS_KELAMIN',
        'label' => 'Jenis Kelamin',
        'rules' => 'required'],

        ['field' => 'ALAMAT_SISWA',
        'label' => 'Alamat',
        'rules' => 'required'],

        ['field' => 'WALI_MURID',
        'label' => 'Wali Murid',
        'rules' => 'required']
        ];
    } 

    public function getKondisi(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA";
        return $this->db->query($query)->result();
    }

    public function kelas1(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'I'";

        return $this->db->query($query)->result();
    }

    public function kelas2()
    {
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'II'";

        return $this->db->query($query)->result();
    }

    public function kelas3(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'III'";

        return $this->db->query($query)->result();
    }

    public function kelas4(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'IV'";

        return $this->db->query($query)->result();
    }

    public function kelas5(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'V'";

        return $this->db->query($query)->result();
    }

    public function kelas6(){
        $query = "SELECT
    *, 
    data_siswa.*, 
    kelas.TINGKAT_KELAS, 
    data_ruang.NAMA_RUANG, 
    data_kota.NAMA_KOTA
FROM
    data_siswa
    INNER JOIN
    kelas
    ON 
        data_siswa.ID_KELAS = kelas.ID_KELAS
    INNER JOIN
    data_ruang
    ON 
        data_siswa.ID_RUANG = data_ruang.ID_RUANG
    INNER JOIN
    data_kota
    ON 
        data_siswa.ID_KOTA = data_kota.ID_KOTA
WHERE
    kelas.TINGKAT_KELAS = 'VI'";

        return $this->db->query($query)->result();
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_SISWA" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();      
        $this->NIS = $post["NIS"];         
        $this->NAMA_SISWA = $post["NAMA_SISWA"]; 
        $this->ID_KELAS = $post["ID_KELAS"];
        $this->ID_RUANG = $post["ID_RUANG"];
        $this->ID_KOTA = $post["ID_KOTA"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->WALI_MURID = $post["WALI_MURID"];           
        $this->ALAMAT_SISWA = $post["ALAMAT_SISWA"];
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->NIS = $post["NIS"];         
        $this->NAMA_SISWA = $post["NAMA_SISWA"]; 
        $this->ID_KELAS = $post["ID_KELAS"];
        $this->ID_RUANG = $post["ID_RUANG"];
        $this->ID_KOTA = $post["ID_KOTA"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->WALI_MURID = $post["WALI_MURID"];           
        $this->ALAMAT_SISWA = $post["ALAMAT_SISWA"];
        $this->db->update($this->_table, $this, array('ID_SISWA' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_SISWA" => $id));     
    }

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */