<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_security extends MX_Controller
{
	function __construct() {
		parent::__construct();
	}
	function make_hash($password) {
//		$hash = $this->bcrypt->hash_password($password);
//		$data = array('pword' => $hash);
//		$this->db->update('users', $data); 
//		return $hash;
	}
}
