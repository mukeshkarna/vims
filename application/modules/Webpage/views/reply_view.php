
<?php 
// print_r($replies);
if(empty($replies))
{
    
}
else
{ 
	foreach ($replies as $key => $value) 
	{	
?>
<br>
<div class="media-body">
	<div class="well">
		<div class="media-heading">
			<strong></strong>&nbsp; <small><?=$value['reply_date']; ?></small>
		</div>
		<p><?=$value['reply_desc']; ?></p>
	</div>
</div>

<?php
	}
}
?>