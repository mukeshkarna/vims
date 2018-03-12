<?php
/**
* 
*/
/**
* 
*/
class Template extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($data=null)
	{		
		$this->load->view('header',$data);
		$this->load->view('main_view',$data);
		$this->load->view('footer');
	}

}

?>