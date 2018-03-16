<?php
if($comment==0)
{
    echo "No Comments Yet.";
}
else
{ 
    foreach ($comment as $key => $value) 
    {
?>
        <div class="media">
            <div class="media-body">
                <div class="well">
                    <div class="media-heading">
                        <strong><?php echo $value['user_name'];?></strong>&nbsp; <small><?php echo $value['comment_date'];?></small>
                        <a class="pull-right" href="<?php //echo base_url();?>Webpage/comment_post/<?php //echo $comment['comment_id'];?>"><i class="icon-repeat"></i> Reply</a>
                    </div>
                    <p><?php echo $value['comment_desc'];?></p>
                </div>
            </div>
        </div><!--/.media-->
<?php 
    }
}
?>