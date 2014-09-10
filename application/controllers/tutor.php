<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutor extends CI_Controller {

	/**
	 * Index Page for this controller.
	*/
	public function index() {
		$tpl_Data = array("page_name"=>"tutor/home",
						  "menu"=>"home",
						  "title"=>SITE_TITLE." :: Welcome to CodeIgniter");
		$this->load->view('layouts/layout', $tpl_Data);
	}
	public function ourtutors() {
		$tpl_Data = array("page_name"=>"tutor/ourtutors",
						  "menu"=>"ourtutors",
						  "title"=>SITE_TITLE." :: List of our Tutors");
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function details() {
		$tpl_Data = array("page_name"=>"tutor/details",
						  "menu"=>"details",
						  "title"=>SITE_TITLE." :: Tutor Details");
		$this->load->view('layouts/layout', $tpl_Data);
	}
	
	public function subjects() {
		$tpl_Data = array("page_name"=>"tutor/subjects",
						  "menu"=>"subjects",
						  "title"=>SITE_TITLE." :: Tutor Subjects");
		$this->load->view('layouts/layout', $tpl_Data);
	}
}

/* End of file Tutor.php */
/* Location: ./application/controllers/Tutor.php */