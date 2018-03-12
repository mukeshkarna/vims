<?php

/**
* 
*/
class Role extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->module('Template');
		$this->load->model('Role_model');

		if(!$this->session->userdata('is_logged')){
			redirect('Login');
		}
	}

	public function index()
	{
		$data['title']='Role';
		$data['heading']='Role List';
		$data['module']="Role";
		$data['content_view']="role_view";
		$data['data']=$this->Role_model->read();
		echo modules::run('Template/index',$data);
	}

	public function visitRolePage($role_id)
	{
		
		$data['title']=$this->Role_model->getRoleById($role_id);
		$data['heading']='Role List';
		$data['data']=$this->Role_model->getUserByRoleId($role_id);
		if($data['data']=='false')
		{
			return false;
		}
		$data['module']="Role";
		$data['content_view']="list_role_view";
		echo modules::run('Template/index',$data);
	}
}

?>