<?php  

class ImgModel extends CI_Model{

	public function __construct() {
		$this->load->database();
	}
//	public function getGameInfo($gameId = FALSE) {
//
//		if ($gameId === FALSE) {
//			$query = $this->db->get('games');
//			return $query->result_array();
//		}
//		$query = $this->db->get_where('games', array('gameId'=>$gameId));
//		return $query->row_array();
//	}
//	public function getGameDetail($gameId) {
//		$query = $this->db->get_where("games", array('gameId'=>$gameId));
//		return $query->row_array();
//	}
	public function getImgInfo($imgId = FALSE) {

		if ($imgId === FALSE) {
			$query = $this->db->get('images');
			return $query->result_array();
		}
		$query = $this->db->get_where('images', array('imgId'=>$imgId));
		return $query->row_array();
	}
	public function getImgDetail($imgId) {
		$query = $this->db->get_where("images", array('imgId'=>$imgId));
		return $query->row_array();
	}
//	function get_table() {
//		$table = "images";
//		return $table;
//	}
//	function get($order_by){
//		$table = $this->get_table();
//		$this->db->order_by($order_by);
//		$query=$this->db->get($table);
//		return $query;
//	}
//	function get_where($imgId){
//		$table = $this->get_table();
//		$this->db->where('imgId', $imgId);
//		$query=$this->db->get($table);
//		return $query;
//	}
} //class


?>