<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('gameModel');
	}
	
	public function index() {
		$data['gameId'] = $this->gameModel->getGameInfo();
		$this->load->view('header', $data);
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){
//				$data['gameId'] = $this->gameModel->getGameInfo();
				$this->load->view('homeGallery', $data);
			}
			if($_GET["action"]=="detail"){
				$result = $this->gameModel->getGameDetail($_GET['gameId']);
				$this->load->view('detail', $result);
			}
			if($_GET["action"]=="checkout"){

				$this->load->view('checkoutForm');
			}
			if($_GET["action"]=="videos"){

				$this->load->view('videos');
			}
			if($_GET["action"]=="vidDetail"){

				$this->load->view('vidDetail');
			}
			if($_GET["action"]=="contact"){

				$this->load->view('contactForm');
			}
			
		} else {
//			$data['gameId'] = $this->gameModel->getGameInfo();
			$this->load->view('homeGallery', $data);
		}
		
		$this->load->view('footer');
		
	}
}
?>	