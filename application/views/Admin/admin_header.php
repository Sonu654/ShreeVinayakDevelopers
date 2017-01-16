<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>Assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="<?php echo base_url() ?>Assets/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/isotope.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <link href="<?php echo base_url() ?>Assets/css/animate.css" rel="stylesheet" media="screen">
        <!-- Owl Carousel Assets -->
        <link href="<?php echo base_url() ?>Assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?php echo base_url() ?>Assets/css/styles.css" />
         Font Awesome -->
        <link href="<?php echo base_url() ?>Assets/font/css/font-awesome.min.css" rel="stylesheet">
        <script>
            baseurl = "<?php echo base_url(); ?>";
            sitePath="<?php echo site_url();?>";
        </script>
    </head>
    <body>
        <header class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>
                                <img src="<?php echo base_url(); ?>Assets/images/logo.png" />
                                <i style="color:#228B22">Shree Vinayak Builders & Developers</i></b></a> 
                    </div>
                    <div class="navbar-right">
                        <h3><i style="color:#228B22"><b> Admin Panel</b></i></h3>
                        <a href="<?php echo site_url('Vinayak/Index'); ?>" target="_blank" class="btn btn-default">go to Site</a>
                        <a href="<?php echo site_url('Admin/logout'); ?>" class="btn btn-default">Logout</a>
                    </div>
                </nav>
            </div>
        </header>
