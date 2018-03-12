<?php
/**
* 
*/
class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function create()
	{
			$data = array(
						  'uname'=>$_POST['uname'],
						  'password'=>$_POST['pass'],
						  'email'=>$_POST['email'],
						  'role_id'=>$_POST['role']
						);
			$str=$this->db->insert('users',$data);
			$query=$this->db->query($str);
	}

	function reads()
	{
		$this->db->select('id,uname, email,role_id');
		$this->db->from('users');
		$query = $this->db->get();
		
		return $query->result_array();
	}


	function updates($id)
	{
		$data=array(
					'uname'=>$_POST['uname'],
					'password'=>$_POST['pass'],
					'email'=>$_POST['email'],
					'role_id'=>$_POST['role']
				);
		$str=$this->db->update('users',$data,array('id'=>$id));
		
		return $str;
	}

	function getUserById($id)
	{
		$this->db->select('uname,password,email,role_id');
		$this->db->from('users');
		$this->db->where('id',$id);
		
		$query=$this->db->get()->row_array();
		return $query;
	}

	function delete($id)
	{
		$this->db->delete('users',array('id'=>$id));
	}

	function getAllRole()
	{
		$this->db->select('role_name,role_id')->from('role');
		$query=$this->db->get();
		return $query->result_array();
	}	
}

?>