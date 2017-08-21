<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themeregion.com/demo/butex2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2017 05:04:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">  
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/ico/144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/images/ico/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/images/ico/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/images/ico/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/images/ico/57.png">
</head><!--/head-->

<body>
    <!-- Page Loader -->
   
<nav>
<?php $this->load->view('front/depan/nav'); ?>
</nav>

<?php $this->load->view($main); ?>

<footer>
<?php $this->load->view('front/depan/footer'); ?>
</footer>
    

    
    <!--/Scripts--> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/gmaps.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/canvas.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>    
</body>

<!-- Mirrored from www.themeregion.com/demo/butex2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2017 05:04:40 GMT -->
</html>