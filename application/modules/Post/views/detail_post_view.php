<div class="container">
  <a class="btn btn-primary" href="<?php echo base_url();?>Post">Back</a>
  <div class="row">
    <div class="col-lg-8">
      <h1 class="mt-4"><?php echo $title1['post_title']; ?></h1>
      <p class="lead">
        by <?php echo $name['uname'];?>
      </p>
      <hr>
      <p><?php echo $data['post_date'];?></p>
      <hr>
      <p class="lead"><?php echo $data['post_desc'];?></p>
      <hr>
      <?php echo $data['post_tags'];?>
      <hr>
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
          <form action="<?php echo base_url();?>Comment/post_comment/<?php echo $data['post_id'];?>">
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" name="sub_comment" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">Commenter Name</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div> -->
    </div>
  </div>
</div>