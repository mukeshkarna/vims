<script src="<?php echo base_url(); ?>public/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.bundle.min.js"></script>
<body>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Role">Role</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>User">User</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Post">Post</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Login/logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1><?php echo $heading; ?></h1>
                <p>
                    <?php 
                        $this->load->view($module.'/'.$content_view); 
                    ?>
                </p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>