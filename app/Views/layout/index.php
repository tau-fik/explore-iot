<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title><?= $title ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="Carlos Alvarez - Alvarez.is">

   <?= $this->renderSection('css') ?>

   <?= $this->renderSection('js') ?>


   <style type="text/css">
      body {
         padding-top: 60px;
      }
   </style>

   <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
   <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


   <!-- Google Fonts call. Font Used Open Sans & Raleway -->
   <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

   <script type="text/javascript">
      $(document).ready(function() {

         $("#btn-blog-next").click(function() {
            $('#blogCarousel').carousel('next')
         });
         $("#btn-blog-prev").click(function() {
            $('#blogCarousel').carousel('prev')
         });

         $("#btn-client-next").click(function() {
            $('#clientCarousel').carousel('next')
         });
         $("#btn-client-prev").click(function() {
            $('#clientCarousel').carousel('prev')
         });

      });

      $(window).load(function() {

         $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function(slider) {
               $('body').removeClass('loading');
            }
         });
      });
   </script>
</head>

<body>

   <!-- NAVIGATION MENU -->

   <div class="navbar-nav navbar-inverse navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="images/logo30.png" alt=""> Explore IoT</a>
         </div>
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <li class="active"><a href="/"><i class="icon-home icon-white"></i> Home</a></li>
               <li><a href="<?= base_url(); ?>/DataTables"><i class="icon-th icon-white"></i> Tables</a></li>
               <li><a href="<?= base_url(); ?>/DataUsers"><i class="icon-user icon-white"></i> Users</a></li>
               <li><a href="<?= base_url(); ?>/Logout"><i class="icon-user icon-white"></i> Logout</a></li>
            </ul>
         </div>
         <!--/.nav-collapse -->
      </div>
   </div>

   <div class="container">
      <?= $this->renderSection('content') ?>
   </div> <!-- /container -->


   <div id="footerwrap">
      <footer class="clearfix"></footer>
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-lg-12">
               <p><img src="<?= base_url(); ?>/template/images/logo.png" alt=""></p>
               <p>Universitas Brawijaya - Explore IoT - Copyright 2021</p>
            </div>

         </div><!-- /row -->
      </div><!-- /container -->
   </div><!-- /footerwrap -->

</body>

</html>