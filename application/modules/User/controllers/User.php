<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		if(!$this->session->userdata('is_logged')){
			redirect('Login');
		}
	}

	
	public function index()
	{
		$data['title'] ='User';
		$data['heading'] = 'User List';
		
		if(isset($_POST['add_user']))
		{
			$this->User_model->create();
		}
		$data['data']=$this->User_model->reads();
		$data['module']="User";
		$data['content_view']="user_view";
		echo modules::run('Template/index',$data);
	}

	public function add_user()
	{
		$data['title'] ='User add';
		$data['heading'] = 'Add User';
		$data['module']="User";
		$data['content_view']="add_user_v";
		$data['get_role']=$this->User_model->getAllRole();
		if($this->User_model->getRole()==1)
		echo modules::run('Template/index',$data);
	}

	public function edit_user($id)
	{
		$data['id']=$id;
		$data['title']='User';
		$data['heading']='Edit User';
		$data['module']="User";
		$data['content_view']="edit_user_view";
		$data['data']=$this->User_model->getUserById($id);
		$data['get_role']=$this->User_model->getAllRole();

		if (isset($_POST['update_user'])) 
		{
			$this->User_model->updates($id);
			redirect('User/index');		
		}
		
		echo modules::run('Template/index',$data);
	}

	public function delete_user($id)
	{
		$data['id']=$id;
		$data['data']=$this->User_model->delete($id);
		redirect('User/index');
	}

	function changePwd()
	{

	}
}
?>