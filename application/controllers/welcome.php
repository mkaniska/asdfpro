<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$tpl_Data['page_name'] = "welcome/home"; 
		$tpl_Data['menu'] = "home";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	public function contactus()
	{
		$tpl_Data['page_name'] = "welcome/contactus"; 
		$tpl_Data['menu'] = "contactus";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function aboutus()
	{
		$tpl_Data['page_name'] = "welcome/aboutus";
		$tpl_Data['menu'] = "aboutus";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */