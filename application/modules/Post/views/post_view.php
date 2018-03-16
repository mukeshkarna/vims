<script>
// $(document).ready(function(){
//     $("button").click(function(){
//         $("table").toggle();
//     });
// });

$(document).ready(function(){
  $.fn.toggleHTML=function(a,b)
  {
    this.html(function(_,html){
      return html===a?b:a;
    })

  }
    $("#button").click(function(){
        $("#tbody").fadeToggle();
        $("#button").toggleHTML('Show Posts','Hide Table');
    });
});
</script>
<div class="container">
    <a class="btn btn-primary" href="<?php echo base_url();?>Post/create_post">Add Post</a> 
    <button class="btn btn-primary" id="button">Hide</button>   
    <div class="panel panel-primary">
    <div class="panel-heading">
      <h3>Posts</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Tags</th>
            <th>Edit Post</th>
            <th>Delete Post</th>
          </tr>
        </thead>
        <tbody id="tbody"> 
        <?php
        if($data==0)
        {
            echo'<tr scope="row">
                    <td align="center" colspan="9">No records Found.</td>
                 </tr>';
        }
        else
        { 
            foreach ($data as $key => $value) 
            {
    
        ?>
          <tr>
            <td><?=$value['post_id'];?></td>
            <td><?=$value['post_date']?></td>
            <td><?=$value['post_title']?></td>
            <td><?=$value['post_desc']?></td>
            <td><?=$value['user_id']?></td>
            <td><?=$value['post_tags']?></td>
            <td><a href="<?php echo base_url();?>Post/edit_post/<?php echo $value['post_id'];?>" class="btn btn-warning btn-xs navbar-btn">Edit</a></td>
            <!-- <td><a href="<?php //echo base_url();?>Post/detail_post/<?php //echo $value['post_id']; ?>" class="btn btn-success btn-xs navbar-btn">View</a></td> -->
            <td><a href="<?php echo base_url();?>Post/delete_post/<?php echo $value['post_id']; ?>" class="btn btn-danger btn-xs navbar-btn">Delete</a></td>
          </tr>
        <?php 
            }
        }
        ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation" align="center">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
