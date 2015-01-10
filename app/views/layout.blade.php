<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="MyTheme">

  @section('title')
  <title>Ksme Network</title>
  @show

  <link href="<?php echo asset('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?php echo asset('assets/css/style-responsive.css'); ?>" rel="stylesheet">
  <link href="<?php echo asset('assets/css/custom.css'); ?>" rel="stylesheet">
  <script src="<?php echo asset('assets/js/jquery/jquery-1.10.2.min.js') ?>"></script>
  <script src="<?php echo asset('assets/js/jquery/jquery-ui-1.9.2.custom.min.js') ?>"></script>
  <script src="<?php echo asset('assets/js/jquery/jquery-migrate-1.2.1.min.js') ?>"></script>
  <script src="<?php echo asset('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo asset('assets/js/modernizr.min.js') ?>"></script>
  <script src="<?php echo asset('assets/js/jquery.nicescroll.js') ?>"></script>

  @yield('script_top')

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body class="sticky-header" >

<section >
    <!-- left side start-->
    @include('element.sidebar')
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >
       
        <!-- header section start-->
        @include('element.header')
        <!-- header section end-->
        <!--body wrapper start-->
        <div class="wrapper">
        		 @yield('content')
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            2014 &copy; Kasikornbank
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>
<!-- Modal -->
<div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-comment-o"></i>   Feedback</h4>
            </div>

            <div class="modal-body row">

                <div class="col-lg-10">
                    <div class="form-group">
                        <label>Name</label>
                        <input id="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label> Email</label>
                        <input id="email"  class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Tittle</label>
                        <input id="title"  class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="2" class="form-control" value=""></textarea>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-danger btn-sm" type="button">Cancel</button>
                        <button class="btn btn-success btn-sm" type="button">Send Feedback</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- modal -->
<!-- Placed js at the end of the document so the pages load faster -->



<!--common scripts for all pages-->
<script src="<?php echo asset('assets/js/scripts.js') ?>"></script>
<script src="<?php echo asset('assets/js/angular/angular.js') ?>"></script>
<script src="<?php echo asset('assets/js/angular/app.js') ?>"></script>
<script src="<?php echo asset('assets/js/angular/controllers.js') ?>"></script>

@yield('script_bottom')


</body>
</html>