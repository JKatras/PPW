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
//	$username = $this->input->post('username', TRUE);
	$this->db->where('username', $this->input->post('username'));
	$this->db->where('password', md5($this->input->post('pword')));
	$query = $this->db->get('users');
//	$pword = $this->input->post('pword');
	$password = $this->db->where('password');
//	if ($this->bcrypt->check_password($pword, $password)) {
//		return true;
//	}else {
//		return false;
//	}
	if ($query->num_rows ==1) {
		return TRUE;
	}
}
}
//function pword_check($username, $pword) {
//	$table = $this->get_table();
//	$this->db->where('username', $username);
//	likely need to change line 17 for real passowrd validation
//	$this->db->where('pword', $pword);
//	$query=$this->db->get($table);
//	$num_rows = $query->num_rows();
//	if ($this->bcrypt->check_password($pword, $hash)){
//		return TRUE;
//	}else{
//		return FALSE;
//	}
//	if ($num_rows>0) {
//		return TRUE;
//	}else {
//		return FALSE;
//	}
//}
//
//function get($order_by){
//$table = $this->get_table();
//$this->db->order_by($order_by);
//$query=$this->db->get($table);
//return $query;
//}
//
//function get_with_limit($limit, $offset, $order_by) {
//$table = $this->get_table();
//$this->db->limit($limit, $offset);
//$this->db->order_by($order_by);
//$query=$this->db->get($table);
//return $query;
//}
//
//function get_where($id){
//$table = $this->get_table();
//$this->db->where('id', $id);
//$query=$this->db->get($table);
//return $query;
//}
//
//function get_where_custom($col, $value) {
//$table = $this->get_table();
//$this->db->where($col, $value);
//$query=$this->db->get($table);
//return $query;
//}
//
//function _insert($data){
//$table = $this->get_table();
//$this->db->insert($table, $data);
//}
//
//function _update($id, $data){
//$table = $this->get_table();
//$this->db->where('id', $id);
//$this->db->update($table, $data);
//}
//
//function _delete($id){
//$table = $this->get_table();
//$this->db->where('id', $id);
//$this->db->delete($table);
//}
//
//function count_where($column, $value) {
//$table = $this->get_table();
//$this->db->where($column, $value);
//$query=$this->db->get($table);
//$num_rows = $query->num_rows();
//return $num_rows;
//}
//
//function count_all() {
//$table = $this->get_table();
//$query=$this->db->get($table);
//$num_rows = $query->num_rows();
//return $num_rows;
//}
//
//function get_max() {
//$table = $this->get_table();
//$this->db->select_max('id');
//$query = $this->db->get($table);
//$row=$query->row();
//$id=$row->id;
//return $id;
//}
//
//function _custom_query($mysql_query) {
//$query = $this->db->query($mysql_query);
//return $query;
//}
//
//}
//?>