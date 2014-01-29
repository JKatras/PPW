<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('gameModel');
	}
	
//	public function index() {
//		$data['gameId'] = $this->gameModel->getGameInfo();
//		$this->load->view('header', $data);
//	}
//		if(!empty($_GET["action"])){
//		
//			if($_GET["action"]=="home"){
//				$data['gameId'] = $this->gameModel->getGameInfo();
//				$this->load->view('homeGallery', $data);
//			}
//			if($_GET["action"]=="detail"){
//				$result = $this->gameModel->getGameDetail($_GET['gameId']);
//				$this->load->view('detail', $result);
//			}
//			if($_GET["action"]=="checkout"){
//
//				$this->load->view('checkoutForm');
//			}
	
	
//			if($_GET["action"]=="cms") {
//				redirect('dashboard/home');
//			}
//		} else {
//			$data['gameId'] = $this->gameModel->getGameInfo();
//			$this->load->view('homeGallery', $data);
//		}
//		
//		$this->load->view('footer');
		
//	}
	public function index() {
		$data['gameId'] = $this->gameModel->getGameInfo();
		$d['currentPage'] = 'games';
		
		$this->load->view('header', $data);
		$this->load->view('homeGallery', $data);
		$this->load->view('footer');
	}
	public function detail() {
		$this->load->model('gameModel');
		$result = $this->gameModel->getGameDetail($_GET['gameId']);
		$d['currentPage'] = 'games';
		
		$this->load->view('header', $d);
		$this->load->view('detail', $result);
		$this->load->view('footer');
	}
	public function checkout() {
//		$data['gameId'] = $this->gameModel->getGameInfo();
		$d['currentPage'] = 'games';
		
		$this->load->view('header', $d);
		$this->load->view('checkoutForm');
		$this->load->view('footer');
	}
	public function videos() {
		$d['currentPage'] = 'videos';
		
		$this->load->view('header', $d);
		$this->load->view('videos');
		$this->load->view('footer');
	}
	public function vidDetail() {
		$d['currentPage'] = 'videos';
		
		$this->load->view('header', $d);
		$this->load->view('videos');
		$this->load->view('footer');
	}
	public function contact() {
		$d['currentPage'] = 'contact';
		
		$this->load->view('header', $d);
		$this->load->view('contactForm');
		$this->load->view('footer');
	}
}	
?>