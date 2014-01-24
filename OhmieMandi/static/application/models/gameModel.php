<?php  

class GameModel extends CI_Model{

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
//	public function getRegionList($regionId = FALSE) {
//
//		if ($regionId === FALSE) {
//			$query = $this->db->get('regions');
//			return $query->result_array();
//		}
//		$query = $this->db->get_where('regions', array('regionId'=>$regionId));
//		return $query->row_array();
//	}
	
//	public function getCharList($regionId) {
//		$query = $this->db->get_where("gotChar", array('region'=>$regionId));
//		return $query->row_array();
//	}//getCharList

} //class


?>