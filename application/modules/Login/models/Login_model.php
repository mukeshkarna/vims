<?php
/**
* 
*/
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function checkUser($email,$password)
	{
		$this->db->select('id,email,password')->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$result=$this->db->get();
		
		if($result->num_rows())     
        {
        	return $result->row()->id;
        }   
        else
       	{
       		return false;
       	}
	}

	function checkEmail($email)
	{
		$this->db->select('id,email')->from('users')->where('email',$email);
		$result=$this->db->get();

		if($result->num_rows())     
        {
        	return $result->row()->id;
        }   
        else
       	{
       		return false;
       	}

	}
}

?>