<?php

/**
* 
*/
class Role_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('User');
	}

	function read()
	{
		$query=$this->db->get('role');
		return $query->result_array();
	}

	function getUserByRoleId($role_id)
	{
		$this->db->select('id,uname,email');
		$this->db->from('users');
		$this->db->where('role_id',$role_id);
		$query=$this->db->get();
		if($query->num_rows())     
        {
        	return $query->result_array();
        }   
        else
       	{
       		return false;
       	}

		
	}

	function getRoleById($role_id)
	{
		$this->db->select('role_name')->from('role');
		$this->db->where('role_id',$role_id);
		$query=$this->db->get();

		return $query->result_array();
	}

	function getRoleId($role_id)
	{
		$this->db->select('role_id')->from('role');
		$this->db->where('role_id',$role_id);
		$query=$this->db->get();
		return $query->result_array();
	}

}

?>