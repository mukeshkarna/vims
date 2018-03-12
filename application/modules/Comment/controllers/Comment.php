<?php

/**
* 
*/
class Comment extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}


	function post_comment($id)
	{
		$data['post_id']=$id;
		if(isset($_POST['sub_comment']))
		{
			$data['data']=$this->Comment_model->post();
		}
		
		
	}
}

?>