<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	private $_table = "pengumuman";

    public $ID_PENGUMUMAN;
    public $ID_TAHUN;
    public $ID_SEMESTER;
    public $ISI;

    public function rules(){ 
        return [ 

        ['field' => 'ISI',
        'label' => 'ISI',
        'rules' => 'required']
        ];
    } 

    public function Kondisi(){
    	$query = "SELECT
	*, 
	pengumuman.*, 
	tahun_ajaran.TAHUN_AJARAN, 
	semester.NAMA_SEMESTER
FROM
	pengumuman
	INNER JOIN
	tahun_ajaran
	ON 
		pengumuman.ID_TAHUN = tahun_ajaran.ID_TAHUN
	INNER JOIN
	semester
	ON 
		pengumuman.ID_SEMESTER = semester.ID_SEMESTER";

		return $this->db->query($query)->result();
    }
    
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_PENGUMUMAN" => $id])->row();
    }

    public function save()     
    {         
        $post = $this->input->post();        
        $this->ID_TAHUN = $post["ID_TAHUN"]; 
        $this->ID_SEMESTER = $post["ID_SEMESTER"];         
        $this->ISI = $post["ISI"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_PENGUMUMAN = $post["id"];         
        $this->ID_TAHUN = $post["ID_TAHUN"];
        $this->ID_SEMESTER = $post["ID_SEMESTER"];         
        $this->ISI = $post["ISI"];                  
        $this->db->update($this->_table, $this, array('ID_PENGUMUMAN' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_PENGUMUMAN" => $id));     
    }

}

/* End of file M_pengumuman.php */
/* Location: ./application/models/M_pengumuman.php */ ?>