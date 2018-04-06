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
                        <?php 
                            foreach ($data as $key => $value) 
                            {
                        ?>
                        <div class="blog-content">
                            <h3><?php echo $value['post_title'];?></h3>
                            <div class="entry-meta">
                                <span><i class="icon-user"></i> <a href="#"><?php echo $value['user_id']; ?></a></span>
                                <span><i class="icon-calendar"></i> <?php echo $value['post_date']; ?></span>
                                <span><i class="icon-comment"></i> <a href="blog-item.php#comments"><?php //echo $comment_c; ?> Comments</a></span>
                            </div>
                            <p>
                                <?php echo substr($value['post_desc'],0,100); ?>
                            </p>
                            <a class="btn btn-default" href="<?php echo base_url();?>Webpage/post_detail/<?=$value['post_id']?>">Read More <i class="icon-angle-right"></i></a>
                            <span><?php echo $value['post_tags']; ?></span>
                        </div>
                        <?php } ?>
                    </div><!--/.blog-item-->
                        <?php //echo $pagination; ?>
                    <!--/.pagination-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section><!--/#blog-->