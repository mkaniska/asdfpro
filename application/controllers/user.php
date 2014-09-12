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

	public function process_signup() {
	
		if($this->input->post('doSignup')=='Submit') {
			$name 		= $this->input->post('name');
			$email 		= $this->input->post('email');
			$phone 		= $this->input->post('phone');
			$subject 	= $this->input->post('subject');
			$message 	= $this->input->post('message');
			if($this->session->userdata('expected')!=$this->input->post('captcha')){
				$this->session->set_flashdata('flash_message', 'Invalid Captcha Entered!');
				redirect('welcome/signup');
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
				$data['contact_name'] = $name;
				$data['contact_email'] = $email;
				$data['contact_phone'] = $phone;
				$data['inquiry_subject'] = $subject;
				$data['inquiry_message'] = $message;
				$data['inquiry_date'] = time();
				$this->CommonModel->insertData('uxi_contact_inquiry',$data);
			}
			$this->session->set_flashdata('flash_message', 'Successfully Sent your details !');
			redirect('welcome/thanks');
		} else {
			$this->session->set_flashdata('flash_message', 'Please enter all the details');
			redirect('welcome/signup/error/1');
		}
	}

	public function uploadimage()
	{
		if(is_array($_FILES)) {
			if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
				$sourcePath = $_FILES['userImage']['tmp_name'];
				$ext = pathinfo($_FILES['userImage']['name'], PATHINFO_EXTENSION);
				$targetPath = base_url()."images/".time().'.'.$ext;
				if(move_uploaded_file($sourcePath,$targetPath)) {
					echo '<img src="'.$targetPath.'" width="100px" height="100px" />';
				}
			}
		}exit;
	}	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */