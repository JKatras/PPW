<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('gameModel');
	}
	
	public function index() {
		
		$this->load->view('header');
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){
				$data['gameId'] = $this->gameModel->getGameInfo();
				$this->load->view('homeGallery', $data);
			}
			if($_GET["action"]=="detail"){

				$this->load->view('detail');
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

			$this->load->view('homeGallery');
		}
		
		$this->load->view('footer');
		
	}
}
?>	