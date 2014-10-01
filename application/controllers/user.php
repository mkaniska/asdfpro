<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	function __construct() {
		parent::__construct();
		$this->load->model('UserModel'); 
		$this->load->model('CommonModel');
	}
        
	public function index()
	{
		$tpl_Data['page_name'] = "user/signup"; 
		$tpl_Data['menu'] = "signup";
		$tpl_Data['title'] = SITE_TITLE." :: Welcome to CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}
        
	public function signup()
	{
		if($this->session->userdata('_user_id')!=''){redirect('user/profile');}
		$_n1 = rand(1,20);
		$_n2 = rand(1,20);
		$_expect = $_n1+$_n2;
		$captchas = array('display' => $_n1.'+'.$_n2,'expected'=>$_expect);
		$this->session->set_userdata($captchas);
		$tblVals = array('user_firstname'=>'','user_lastname'=>'','user_email'=>'','user_phone'=>'',
						 'user_password'=>'','user_gender'=>'','user_address'=>'','user_state'=>'',
						 'user_city'=>'','user_zipcode'=>'','user_picture'=>'','user_type'=>'');
		$this->session->set_flashdata('refill_data', $tblVals);
		$tpl_Data['states'] = $this->CommonModel->get_states();
		$tpl_Data['cities'] = $this->CommonModel->get_cities();
		$tpl_Data['page_name'] = "user/signup"; 
		$tpl_Data['menu'] = "signup";
		$tpl_Data['title'] = SITE_TITLE." :: Register with CodeIgniter Sample";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function profile()
	{
		if($this->session->userdata('_user_id')==''){redirect('user/login');}
		$tpl_Data['info'] = $this->UserModel->getUserDetails();
		$userType = $this->session->userdata('_user_type');
		$tpl_Data['page_name'] = "user/".$userType."_profile";
		$tpl_Data['menu'] = "profile";
		$tpl_Data['title'] = SITE_TITLE." :: Profile Details";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function updateprofile()
	{
		$userID = $this->session->userdata('_user_id');
		$userType = $this->session->userdata('_user_type');		
		if(trim($this->input->post('password'))!=''){
			$tableValues['user_password']  = $this->input->post('password');
			$tableValues['user_password']  = $this->input->post('repassword');
		}
		$tableValues['user_phone'] 	   = $this->input->post('phone');
		$tableValues['user_gender']    = $this->input->post('gender');
		$tableValues['user_address']   = $this->input->post('address');
		$tableValues['user_state']     = $this->input->post('state');
		$tableValues['user_city']      = $this->input->post('city');
		$tableValues['user_zipcode']   = $this->input->post('zipcode');
		$tableValues['user_zipcode']   = $this->input->post('zipcode');		
		$this->CommonModel->updateData('uxi_users', $tableValues, 'user_id', $userID);		
		if($userType=='tutor') {
			$childValues['tutor_current_work_status'] = $this->input->post('work_status');
			$childValues['tutor_skills'] = $this->input->post('skills');
			$childValues['tutor_institute'] = $this->input->post('institute');
			$childValues['tutor_experience'] = $this->input->post('experience');
		}else {
			$childValues['student_current_study_status'] = $this->input->post('study_status');
			$childValues['student_skills'] = $this->input->post('skills');
			$childValues['student_institute'] = $this->input->post('institute');
			$childValues['student_qualification'] = $this->input->post('qualification');
		}
		$this->CommonModel->updateData('uxi_'.$userType.'_details', $childValues, 'user_id', $userID);
		$this->session->set_flashdata('flash_message', 'Profile details updated successfully!');
		redirect('user/profile');
	}
	
	public function editprofile()
	{
		if($this->session->userdata('_user_id')==''){redirect('user/login');}
		$tpl_Data['info'] = $this->UserModel->getUserDetails();
		$userType = $this->session->userdata('_user_type');
		$tpl_Data['states'] = $this->CommonModel->get_states();
		$tpl_Data['cities'] = $this->CommonModel->get_cities();			
		$tpl_Data['page_name'] = "user/edit_".$userType."_profile";
		$tpl_Data['menu'] = "editprofile";
		$tpl_Data['title'] = SITE_TITLE." :: Edit Profile";
		$this->load->view('layouts/layout', $tpl_Data);
	}
	
	public function login()
	{
		$tpl_Data['page_name'] = "user/login"; 
		$tpl_Data['menu'] = "login";
		$tpl_Data['title'] = SITE_TITLE." :: Login";
		$this->load->view('layouts/layout', $tpl_Data);
	}

	public function process_signup()
    {
		if(1) {
			$tableValues['user_type']       = $this->input->post('user_type');
			$tableValues['user_firstname']  = $this->input->post('first_name');
			$tableValues['user_lastname']   = $this->input->post('last_name');
			$tableValues['user_email']      = $this->input->post('email');
			$tableValues['user_phone']      = $this->input->post('phone');
			$tableValues['user_password']   = $this->input->post('password');
			$tableValues['user_gender']     = $this->input->post('gender');
			$tableValues['user_address']    = $this->input->post('address');
			$tableValues['user_state']      = $this->input->post('state');
			$tableValues['user_city']       = $this->input->post('city');
			$tableValues['user_zipcode']    = $this->input->post('zipcode');
			$tableValues['user_picture']    = $this->input->post('userpicture');

			$tableValues['user_registered_on']  = time();
			$tableValues['user_active_status']  = '0';
			$tableValues['user_last_login']     = '';

			if($this->session->userdata('expected')!=$this->input->post('captcha')){
				$this->session->set_flashdata('flash_message', 'Please enter a valid answer!');
				$this->session->set_flashdata('refill_data', $tableValues);
				redirect('user/signup');                    
			}else if($this->UserModel->isUserAlreadyExists(trim($tableValues['user_email']))) {
				$this->session->set_flashdata('flash_message', 'Email address already exists!');
				$this->session->set_flashdata('refill_data', $tableValues);
				redirect('user/signup');                    
			}else {
				$uType = strtolower($tableValues['user_type']);
				$this->CommonModel->insertData('uxi_'.$uType.'_details',array('user_id'=>$isValidID));
				if($isValidID>0) {
					$isValidID = $this->CommonModel->insertData('uxi_users',$tableValues);
					$this->load->helper('common');
					$activation_link = base_url().'user/activate/';
					$activation_link.= encryptData(array('email'=>$tableValues['user_email'],'id'=>$isValidID));
					$mconfig['protocol'] = 'mail';
					$mconfig['wordwrap'] = FALSE;
					$mconfig['mailtype'] = 'html';
					$mconfig['charset'] = 'utf-8';
					$mconfig['crlf'] = "\r\n";
					$mconfig['newline'] = "\r\n";
					$this->load->library('email',$mconfig);
					$this->email->from('murugdev.eee@gmail.com', 'Murugesan P');
					$this->email->to($this->input->post('email'));
					$this->email->subject(SITE_TITLE.' - Email Verification');

					$email_data['HelloTo']      = $tableValues['user_firstname'].' '.$tableValues['user_lastname'];
					$email_data['activateLink'] = $activation_link;
					$email_data['userName']     = $tableValues['user_email'];
					$email_data['passWord']     = $tableValues['user_password'];
					
					$email_template = $this->load->view('templates/signup_email_template', $email_data, true);				

					if($this->config->item('is_email_enabled')) {
						$this->email->message($email_template);
						$this->email->send();
					}
					$this->session->set_flashdata('flash_message', 'Successfully Registered & Verification Email has been sent to your email address!.');
					redirect('user/login');
				}else {
					$this->session->set_flashdata('flash_message', 'Invalid Details provided!.');
					$this->session->set_flashdata('refill_data', $tableValues);
					redirect('user/signup');
				}
			}
		}
	}

	public function process_login() {

		$tableValues['user_name']  = mysql_real_escape_string($this->input->post('user_name'));
		$tableValues['password']   = mysql_real_escape_string($this->input->post('password'));
		$userInfo = $this->UserModel->isValidLogin('uxi_users',$tableValues);
		if($userInfo!='') {
			$users_data = array('_user_id'  => $userInfo->user_id,
								'_user_type'=> $userInfo->user_type,
								'_user_name'=> $userInfo->user_firstname.' '.$userInfo->user_lastname
							   );
			$this->session->set_userdata($users_data);
			redirect('user/profile');
		}else {
			$this->session->set_flashdata('flash_message', 'Invalid Login Details provided!.');
			redirect('user/login');
		}
	}
        
	public function activate() {
		$this->load->helper('common');
		$string = ($this->uri->segment(3))? $this->uri->segment(3) : 0;	
		$actual_data = decryptData($string);
		$isDone = $this->UserModel->activateUser($actual_data);
		if($isDone) {
			$this->session->set_flashdata('flash_message', 'Your Account is activated successfully!');
			redirect('user/login');
		}else {
			$this->session->set_flashdata('flash_message', 'Invalid Request!');
			redirect('user/login');
		}
	}
        
	public function uploadimage()
	{
		if(is_array($_FILES)) {
			if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
				$sourcePath = $_FILES['userImage']['tmp_name'];
				$ext = pathinfo($_FILES['userImage']['name'], PATHINFO_EXTENSION);
				$targetFileName = time().'.'.$ext;
				$targetPath = "upload_images/".$targetFileName;
				if(move_uploaded_file($sourcePath,$targetPath)) {
					if($this->session->userdata('_recent_picture')!='') {
						unlink($this->session->userdata('_recent_picture'));
					}
					$picture = array('_recent_picture' => $targetPath);
					$this->session->set_userdata($picture);				
					echo '<img src="'.base_url().$targetPath.'" width="100px" height="100px" />';
					echo '<input type="hidden" value="'.$targetFileName.'" name="userpicture" id="userpicture" />';
				}
			}
		}exit;
	}

	public function logout() {
		$sessdata = array('_user_id' => '', '_user_type' => '', '_user_name' => '');
		$this->session->unset_userdata($sessdata);
		$this->session->set_flashdata('flash_message', 'Successfully Logged out !..');
		redirect('user/login');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */