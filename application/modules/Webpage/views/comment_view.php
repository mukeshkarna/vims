<hr>
<script>
// $(document).ready(function(){
//     $("button").click(function(){
//         $("table").toggle();
//     });
// });

// $(document).ready(function(){
//   $.fn.toggleHTML=function(a,b)
//   {
//     this.html(function(_,html){
//       return html===a?b:a;
//     })

//   }
//     $("#a").click(function(){
//         $("#form").fadeToggle();
//         $("#a").toggleHTML('Reply comment','Reply');
//     });
// });
</script>

<?php
if(empty($commentReplies))
{
    echo "No Comments Yet.";
}
else
{ 
    foreach ($commentReplies as $key => $value) 
    {
?>
        <div class="media">
            <div class="media-body">
                <div class="well">
                    <div class="media-heading">
                        <strong><?php echo $value['user_name'];?></strong>&nbsp; <small><?php echo $value['comment_date'];?></small>
                    </div>
                    <p><?php echo $value['comment_desc'];?></p>
                </div>
                <form action="<?php echo base_url();?>Webpage/reply_post/<?php echo $value['comment_id'];?>" method="post">
                        <textarea class="form-control" name="reply_d"></textarea>
                        <input class="btn btn-primary" type="submit" name="reply" value="Reply">
                </form>
            </div>
            <?php //$data['replies']=$value['replies'];
                $this->load->view('reply_view',$value); 
            ?>
        </div><!--/.media-->

<?php 
    }
}
?>   
<hr>