<?php  

class Game_model extends CI_Model{

	public function __construct() {
		$this->load->database();
	}
	public function getGameInfo($gameId = FALSE) {

		if ($gameId === FALSE) {
			$query = $this->db->get('games');
			return $query->result_array();
		}
		$query = $this->db->get_where('games', array('gameId'=>$gameId));
		return $query->row_array();
	}
	public function getGameDetail($gameId) {
		$query = $this->db->get_where("games", array('gameId'=>$gameId));
		return $query->row_array();
	}
} //class


?>