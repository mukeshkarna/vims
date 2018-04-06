<?php

/**
* 
*/
class Login extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('Encrypt');
		$this->load->model('Login_model');
		$this->load->library('email');
	}


	public function index()
	{
		if($this->session->userdata('is_logged'))
		{
			redirect('Post');
		}

		$this->load->library('form_validation');
		
		if(isset($_POST['login_form']))
		{			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else
			{
				$email=$this->input->post('email');
				$password=$this->input->post("pass");
				$user_id=$this->Login_model->checkUser($email,$password);
				if($user_id)
				{
					$data = array(
						'is_logged'=>true,
						'user_id'=> $user_id
					);
					$this->session->set_userdata($data);
					redirect('Post');
				}
				else
				{
					redirect('Login/index');
				}
			}
		}
		$this->load->view('admin_login');

	}


	function forgetPassword()
	{
		$this->load->view('getEmail');
	}

	function forgetPassProcess()
	{
		if (isset($_POST['forget_pass'])) 
		{
			
			$email=$this->input->post('email');
			$check=$this->Login_model->checkEmail($email);
			if($check)
			{
				$config = array();
				$config['protocol'] ='smtp';
				$config['smtp_host'] = 'ssl://smtp.googlemail.com';
				$config['smtp_port'] = 465;
			  	$config['smtp_user'] = 'mukeshkarn03@gmail.com'; // change it to yours
			  	$config['smtp_pass'] = '2Ecc@Jw@gal'; // change it to yours
			  	$config['mailtype'] = 'html';
			  	$config['charset'] = 'iso-8859-1';
			  	$config['wordwrap'] = TRUE;
			  	$this->email->initialize($config);
			  	echo $email.' '.$check;

				//$this->load->library('email', $config);
			  	$message="Please visit: localhost/test/Login/resetPassword to reset your password.";
			  	$this->email->from('mukeshkarn03@gmail.com', 'Mukesh Karna');
			  	$this->email->to($email);
			  	$this->email->subject('Password Reset');
			  	$this->email->message($message);
			  	if($this->email->send())
			  	{
			  		echo 'Email sent.';
			  	}
			  	else
			  	{
			  		show_error($this->email->print_debugger());
			  	}
			  }	
			}
			else
			{
				return false;
			}
		}


		function resetPassword()
		{
			$this->load->view('resetPasswordView');
		}

		function resetPassProcess()
		{
			if (isset($_POST['new_pass'])) 
			{
				$pass=$this->input->post('password');
				$re_pass=$this->input->post('re_password');
				if($pass===$re_pass)
				{
					$this->Login_model->updatePassword();
					echo "Your Password has been changed.";
					redirect('Login/index');
				}
			}
		}


		function logout()
		{
			$this->session->sess_destroy();
			redirect('Login/index');
		}
	}
	?>