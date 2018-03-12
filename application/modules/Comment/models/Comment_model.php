<?php
/**
* 
*/
class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}

	function post()
	{
		$data=array(
			'comment_desc'=$_POST['post_desc'],
			'comment_date'=date('Y-m-s h:i:s')
			'post_id'=$_POST['']
		);	
	}
	
}

?>