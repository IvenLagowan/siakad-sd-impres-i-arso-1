<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penggunaan extends CI_Model {

	private $_table = "login"; 
	private $_table2 = "data_pengajar";
    public $ID_LOGIN;
    public $ID_PENGAJAR;
    public $STATUS;
    public $USERNAME;
    public $PASSWORD;

    public function rules(){ 
        return [ 
        ['field' => 'USERNAME',
        'label' => 'Username',
        'rules' => 'required'],

        ['field' => 'PASSWORD',
        'label' => 'Password',
        'rules' => 'required'],

        ['field' => 'ID_STATUS',
        'label' => 'Status Login',
        'rules' => 'required']
        ];
    } 

    public function getKondisi(){
        $query = "SELECT
    *, 
    login.*, 
    data_pengajar.NAMA_PENGAJAR
FROM
    login
    INNER JOIN
    data_pengajar
    ON 
        login.ID_PENGAJAR = data_pengajar.ID_PENGAJAR";

        return $this->db->query($query)->result();
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getKepala(){
        return $this->db->get($this->_table2)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["ID_LOGIN" => $id])->row();
    } 

    public function save()     
    {         
        $post = $this->input->post();         
        $this->ID_LOGIN = uniqid();         
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];           
        $this->STATUS = $post["ID_STATUS"];  
        $this->USERNAME = $post["USERNAME"];
        $this->PASSWORD = $post["PASSWORD"];                  
        $this->db->insert($this->_table, $this);     
    } 

    public function update(){         
        $post = $this->input->post();         
        $this->ID_LOGIN = $post["id"];         
        $this->ID_PENGAJAR = $post["ID_PENGAJAR"];           
        $this->STATUS = $post["ID_STATUS"];  
        $this->USERNAME = $post["USERNAME"];
        $this->PASSWORD = $post["PASSWORD"];                  
        $this->db->update($this->_table, $this, array('ID_LOGIN' => $post['id']));     
    } 

    public function delete($id){         
        return $this->db->delete($this->_table, array("ID_LOGIN" => $id));     
    }

}

/* End of file M_pengggunaan.php */
/* Location: ./application/models/M_pengggunaan.php */