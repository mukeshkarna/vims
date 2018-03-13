<?php
/**
* 
*/
class Post extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Post_model');

		if(!$this->session->userdata('is_logged')){
			redirect('Login');
		}
	}

	public function index()
	{
		$data['title']='Post';
		$data['heading']='Posts';
		$data['module']='Post';
		$data['content_view']='post_view';
		$data['data']=$this->Post_model->read_post();
		if($data['data']=='false')
		{
			return false;
		}
		echo modules::run('Template/index',$data);
	}

	public function create_post()
	{
		$data['title']='Form';
		$data['heading']='Create Post';
		$data['module']='Post';
		$data['content_view']='add_post';
		if(isset($_POST['sub_post']))
		{
			$this->Post_model->create_post();
			redirect('Post/index');
		}
		echo modules::run('Template/index',$data);
	}

	public function detail_post($id)
	{
		$data['post_id']=$id;
		$data['title']=$this->Post_model->getTitleById($id);
		$data['heading']='';
		$data['title1']=$this->Post_model->getTitleById($id);
		$data['data']=$this->Post_model->readPostByUserId($id);
		$data['name']=$this->Post_model->getNameById($id);
		$data['user']=$this->Post_model->getUserId($uid);
		$data['module']='Post';
		$data['content_view']='detail_post_view';

		echo modules::run('Template/index',$data);
	}

	public function edit_post($id)
	{		
		
		$data['post_id']=$id;
		$data['title']='';
		$data['heading']='Edit Post';
		$data['module']="Post";
		$data['content_view']="edit_post_view";
		$data['data']=$this->Post_model->readPostById($id);	
		if(isset($_POST['sub_post'])) 
		{
			$this->Post_model->update_post($id);
			redirect('Post/index');	
		}
		echo modules::run('Template/index',$data);
	}

	public function delete_post($id)
	{
		$data['post_id']=$id;
		$data['data']=$this->Post_model->delete($id);
		redirect('Post/index');

	}
}
?>