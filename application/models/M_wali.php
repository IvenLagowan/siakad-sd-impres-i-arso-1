<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wali extends CI_Model {

	private $_table = "wali_kelas";
	
	public $ID_WALIKELAS;
	public $ID_RUANG;
    public $ID_PENGAJAR;

    public function rules(){ 
        return [ 

        ['field' => 'ID_RUANG',
        'label' => 'Ruang',
        'rules' => 'required']
        ,
        ['field' => 'ID_PENGAJAR',
        'label' => 'Ruang',
        'rules' => 'required']
        ];
    }

    public function Kondisi(){
    	$query = "SELECT
	*, 
	wali_kelas.*, 
	data_ruang.NAMA_RUANG, 
	data_pengajar.NIP, 
	data_pengajar.NAMA_PENGAJAR
FROM
	wali_kelas
	INNER JOIN
	data_pengajar
	ON 
		wali_kelas.ID_PENGAJAR = data_pengajar.ID_PENGAJAR
	INNER JOIN
	data_ruang
	ON 
		wali_kelas.ID_RUANG = data_ruang.ID_RUANG";

		return $this->db->query($query)->result();
    } 
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_WALIKELAS" => $id])->row();
    }

    public function save()     
    {         
        $post = $this->input->post(); 
        $this->ID_WALIKELAS = uniqid();        
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];         
        $this->ID_RUANG = $post["ID_RUANG"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_WALIKELAS = $post["id"];         
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];         
        $this->ID_RUANG = $post["ID_RUANG"];                  
        $this->db->update($this->_table, $this, array('ID_WALIKELAS' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_WALIKELAS" => $id));     
    }

}

/* End of file M_wali.php */
/* Location: ./application/models/M_wali.php */ ?>