<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_users extends CI_Model {

	function __construct() {
	parent::__construct();
	}
	
	function get_table() {
	$table = "users";
	return $table;
	}
	
	function validate() {
	
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('pword')));
		$query = $this->db->get('users');
		$password = $this->db->where('password');
	
		if ($query->num_rows ==1) {
			return TRUE;
		}
	}
}
?>