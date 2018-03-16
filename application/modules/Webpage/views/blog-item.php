    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        //js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144716315690681";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <section id="blog" class="container">
        <div class="row">    
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h3><?php echo $title1['post_title']; ?></h3>
                            <div class="entry-meta">
                                <span><i class="icon-user"></i><?php echo $name['uname']; ?></span>
                                <span><i class="icon-calendar"></i> <?php echo $data['post_date']; ?></span>
                                <!-- <span><i class="icon-comment"></i> <a href="blog-item.php#comments">3 Comments</a></span> -->
                            </div>
                            <p class="lead">
                                <?php echo $data['post_desc']; ?>
                            </p>

                            <hr>

                            <div class="tags">
                                <i class="icon-tags"></i> Tags: <?php echo $data['post_tags']; ?>
                            </div>

                            <p>&nbsp;</p>

                            <div class="author well">
                                <div class="media">
                                    <!-- <div class="pull-left">
                                        <img class="avatar img-thumbnail" src="images/blog/avatar.jpg" alt="">
                                    </div> -->
                                    <!-- <div class="media-body">
                                        <div class="media-heading">
                                            <strong></strong>
                                        </div>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                    </div> -->
                                </div>
                            </div><!--/.author-->

                            <div id="comments">
                                <div id="comments-list">
                                    <h3><?php //echo $count; ?> Comments</h3>

                                    <?php 
                                         $this->load->view('comment_view',$data);   
                                    ?>

                                </div><!--/#comments-list-->  

                                <div id="comment-form">
                                    <h3>Leave a comment</h3>
                                    <form method="post" class="form-horizontal" role="form" action="<?php echo base_url();?>Webpage/comment_create/<?php echo $data['post_id'];?>">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="username" placeholder="Name" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea rows="8" class="form-control" name="description" placeholder="Comment" required="required"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="comment" value="Comment" class="btn btn-danger btn-lg">
                                    </form>
                                </div><!--/#comment-form-->
                            </div><!--/#comments-->
                        </div>
                    </div><!--/.blog-item-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section><!--/#blog-->