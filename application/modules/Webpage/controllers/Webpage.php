<?php

/**
* 
*/
class Webpage extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Webpage_model');
	}

	function index()
	{
		$data['title']='Blog List';
		$data['heading']='Home';
		$data['data']=$this->Webpage_model->read_post();
		$data['comment_c']=$this->Webpage_model->countComment();

		//$this->load->library('pagination');

		// $config['base_url'] = 'http://localhost/test/Webpage/index/';
		// $config['total_rows'] =$this->Webpage_model->countPost() ;
		// $config['per_page'] = 3;
		// $config['num_links'] = 2;
  //       $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
  //       $config['full_tag_close'] = '</ul>';


		// $this->pagination->initialize($config);
		// $data['pagination'] = $this->pagination->create_links();
  //       $data['records'] = $this->db->get('posts',$config['per_page'], $this->uri->segment(3));

		$this->load->view('header',$data);
		$this->load->view('blog',$data);
		$this->load->view('footer');
	}

	function post_detail($id)
	{
		$data['post_id']=$id;
		$data['title']=$this->Webpage_model->getTitleById($id);
		$data['heading']='Blog';
		$data['title1']=$this->Webpage_model->getTitleById($id);
		$data['data']=$this->Webpage_model->readPostByUserId($id);
		$data['name']=$this->Webpage_model->getNameById($id);
		$data['count']=$this->Webpage_model->countComment();
		$comment=$this->Webpage_model->getCommentByPostId($id);
		$data['commentReplies']=$this->Webpage_model->getReplyByCommentId($comment);

		// print($id);
		// echo('<pre>');
		// print_r($data['commentReplies']);
		// die;

		$this->load->view('header',$data);
		$this->load->view('blog-item',$data);
		$this->load->view('footer');
		
	}


	function comment_create($id)
	{
		$data['post_id']=$id;

		if(isset($_POST['comment']))
		{
			$this->Webpage_model->insert_comment($id);
			redirect('Webpage/index');
		}
	}

	function reply_post($id)
	{
		$data['comment_id']=$id;
		if (isset($_POST['reply']))
		{
			$this->Webpage_model->insert_reply($id);
			redirect('Webpage/index');
		}
	}

}
?>