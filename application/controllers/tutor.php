<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutor extends CI_Controller {

	/**
	 * Index Page for this controller.
	*/
	public function index()
	{
		$tpl_Data['page_name'] = "tutor/home"; 
		$tpl_Data['menu'] = "home";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	public function ourtutors()
	{
		$tpl_Data['page_name'] = "tutor/ourtutors"; 
		$tpl_Data['menu'] = "ourtutors";
		$tpl_Data['title'] = SITE_TITLE." :: List of our Tutors";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function details()
	{
		$tpl_Data['page_name'] = "tutor/details";
		$tpl_Data['menu'] = "details";
		$tpl_Data['title'] = SITE_TITLE." :: Tutor Details";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	
	public function subjects()
	{
		$tpl_Data['page_name'] = "tutor/subjects";
		$tpl_Data['menu'] = "subjects";
		$tpl_Data['title'] = SITE_TITLE." :: Tutor Subjects";
		$this->load->view('layouts/layout', $tpl_Data);
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */