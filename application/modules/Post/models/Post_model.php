<?php
/**
* 
*/
class Post_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function create_post()
	{
		$data=array(
			'post_title'=>$_POST['title'],
			'post_desc'=>$_POST['description'],
			'post_tags'	=>$_POST['tags'], 
			'post_date'=>date('Y-m-s h:i:s'),
			'user_id'=>$this->session->userdata('user_id')
		);
		$str=$this->db->insert('posts',$data);
		// $query=$this->db->query($str);
	}


	function read_post()
	{
		$this->db->select('post_id,post_title,post_desc,post_tags,post_date,user_id');
		$this->db->from('posts');
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

	function getTitleById($id)
	{
		$this->db->select('post_title')->from('posts')->where('post_id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}

	function readPostById($id)
	{
		$this->db->select('post_id,post_title,post_desc,post_tags,post_date,user_id');
		$this->db->from('posts');
		$this->db->where('post_id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}

	function getNameById($id)
	{
		$this->db->select('uname');
		$this->db->from('users');
		$this->db->where('id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}

	function delete($id)
	{
		$this->db->delete('posts',array('post_id'=>$id));
	}

	function update_post($id)
	{
		$data=array(
			'post_title'=>$_POST['title'],
			'post_desc'=>$_POST['description'],
			'post_tags'	=>$_POST['tags'], 
			'post_date'=>date('Y-m-s h:i:s'),
			'user_id'=>$this->session->userdata('user_id')
		);
		$str=$this->db->update('posts',$data,array('post_id'=>$id));
		return $str;
	}

	function getId($id)
	{
		if($this->session->userdata('user_id')==$id)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}
?>