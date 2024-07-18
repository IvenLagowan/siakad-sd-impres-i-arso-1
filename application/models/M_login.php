<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_login()
	{
		$USERNAME = set_value('USERNAME');
		$PASSWORD = set_value('PASSWORD');

		$result   = $this->db->where('USERNAME',$USERNAME)
							 ->where('PASSWORD',$PASSWORD)
							 ->limit(1)
							 ->get('login');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */ ?>
