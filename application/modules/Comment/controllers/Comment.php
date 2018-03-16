<?php

/**
* 
*/
class Comment extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Comment_model');
	}


	

}

?>