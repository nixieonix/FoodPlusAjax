<?php
class m_access extends CI_Model {
	/*public function check_user($username,$password) {
		$this->query = $this->db->select('COUNT(*)')->from('users')->where(array('username'=>$username,'password'=>$password))->limit(1)->get();
		return $this->query->row_array();
	}*/

		public function getproduct()
	{
		$query=$this->db->get('products');
		return $query->result(); // returns results for multiple rows
	}
}
