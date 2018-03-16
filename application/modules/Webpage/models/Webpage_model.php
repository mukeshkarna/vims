<?php

/**
* 
*/
class Webpage_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function read_post()
	{
		$this->db->select('post_id,post_title,post_desc,post_tags,post_date,user_id');
		$this->db->from('posts');
		$this->db->order_by("post_id", "desc");
		$query=$this->db->get();
		
		return $query->result_array();
	}

	function getNameById($id)
	{
		$this->db->select('uname');
		$this->db->from('users');
		$this->db->where('id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}


	function getTitleById($id)
	{
		$this->db->select('post_title')->from('posts')->where('post_id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}

	function readPostByUserId($id)
	{
		$this->db->select('post_id,post_title,post_desc,post_tags,post_date,user_id');
		$this->db->from('posts');
		$this->db->where('post_id',$id);
		$query=$this->db->get()->row_array();

		return $query;
	}

	function countComment()
	{
		$this->db->select('comment_id, count(*)');
		$this->db->from('comments');  
		$query = $this->db->get(); 
		return $query; 
	}

	function countPost()
	{
		$this->db->select('post_id, count(*)');
		$this->db->from('posts');  
		$query = $this->db->get(); 
		return $query; 
	}


	function getCommentByPostId($id)
	{
		$this->db->select('comment_id,user_name,comment_desc,comment_date,post_id');
		$this->db->from('comments');
		$this->db->where('post_id',$id);
		$query=$this->db->get();

		if ($query->num_rows()>0) 
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}


	function getReplyByCommentId($commentArray)
	{
		foreach ($commentArray as $key => $value) 
		{
			$this->db->select('reply_id,reply_desc,reply_date,comment_id');
			$this->db->from('replies');
			$this->db->where('comment_id',$value['comment_id']);
			$commentArray[$key]['replies']=$this->db->get()->result_array();
		}
		
		return $commentArray;
	}

	function insert_comment($id)
	{
		$data=array(
			'user_name'=>$_POST['username'],
			'comment_desc'=>$_POST['description'],
			'comment_date'=>date('Y-m-s h:i:s'),
			'post_id'=>$id
		);
		$str=$this->db->insert('comments',$data);
	}

	function insert_reply($id)
	{
		$data=array(
			'reply_desc'=>$_POST['reply_d'],
			'reply_date'=>date('Y-m-s h:i:s'), 
			'comment_id'=>$id
		);
		$str=$this->db->insert('replies',$data);
	}

}

?>