<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$tpl_Data['page_name'] = "user/signup"; 
		$tpl_Data['menu'] = "signup";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	public function signup()
	{
		$tpl_Data['page_name'] = "user/signup"; 
		$tpl_Data['menu'] = "signup";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	public function contactus()
	{
		$_n1 = rand(1,20);
		$_n2 = rand(1,20);
		$_expect = $_n1+$_n2;
		$captchas = array('display' => $_n1.'+'.$_n2,'expected'=>$_expect);
		$this->session->set_userdata($captchas);
		$tpl_Data['page_name'] = "welcome/contactus"; 
		$tpl_Data['menu'] = "contactus";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function process_contact() {
	
		if($this->input->post('doContact')=='Submit') {
			$name 		= $this->input->post('name');
			$email 		= $this->input->post('email');
			$phone 		= $this->input->post('phone');
			$subject 	= $this->input->post('subject');
			$message 	= $this->input->post('message');
			if($this->session->userdata('expected')!=$this->input->post('captcha')){
				$this->session->set_flashdata('flash_message', 'Invalid Captcha Entered!');
				redirect('welcome/contactus');
			}
			$config['protocol'] = 'mail';
			$config['wordwrap'] = FALSE;
			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['crlf'] = "\r\n";
			$config['newline'] = "\r\n";
			$this->load->library('email',$config);
			$this->email->from('murugesanme@yahoo.com', 'Murugesan P');
			$this->email->to('murugdev.eee@gmail.com');
			$this->email->subject('Inquiry Notification - '.$subject);
			$email_data['HelloTo'] 		= 'Admin';
			$email_data['ToMessage'] 	= $message;			
			$temp_str ="Subject : ".$subject." <br />";
			$temp_str.="Full Name : ".$name." <br />";
			$temp_str.="Email Address : ".$email." <br />";
			$temp_str.="Phone Number : ".$phone." <br /><br />";
			$email_data['ItemDetails'] 	= $temp_str;
			$email_template = $this->load->view('templates/contact_us_email', $email_data, true);
			if($this->config->item('is_email_enabled')) {
				$this->email->message($email_template);
				$this->email->send();				
			}
			$this->session->set_flashdata('flash_message', 'Successfully Sent your details !');
			redirect('welcome/thanks');
		} else {
			$this->session->set_flashdata('flash_message', 'Please enter all the details');
			redirect('welcome/contactus/error/1');
		}
	}
	
	public function aboutus()
	{
		$tpl_Data['page_name'] = "welcome/aboutus";
		$tpl_Data['menu'] = "aboutus";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */