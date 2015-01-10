@extends('layout')

@section('script_top')
<link href="<?php echo asset('assets/js/iCheck/skins/square/red.css'); ?>" rel="stylesheet">
@stop

@section('content')
<!--center side-->
<h4>
	<a href="#"><strong>Ksme</strong></a>
</h4>
<div class="panel col-lg-12 col-xs-12 no-padding" style="border:2px solid #E1E1E2;margin-bottom:10px;display:inline-block">
		
		<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       Region		        
			    </div>
		</header>
		<div class="DocumentList scroll">
			<div class="row" style="overflow-x:hidden;overflow-y:hidden;width:<?php echo 265*20; ?>px;">
				<?php for ($i=1; $i <= 20 ; $i++) { ?>
			    <div class="panel-body inner-gridbox" style="width:258px;float:none;display:inline-block">                    
			            <div class="media">
			                <a href="#" >
			                    <img alt="" src="assets/images/photos/user1.png" class="avatar avatar-lg avatar-circle">
			                </a>
			                <div class="media-body">
			                    <h5 class="media-heading"><a href="#"><strong>Myname Sample 1</strong></a></h5>
			                    <p>Kse Car Wash</p>
			                	<p class="text-muted" style="font-size:20px;">
						            <a href="#"><i class="fa fa-envelope"></i></a>
						            <a href="#"><i class="fa fa-facebook-square"></i></a>
						            <a href="#"><i class="fa fa-instagram"></i></a>
						            <a href="#"><i class="fa fa-twitter"></i></a>
						            <a href="#"><i class="fa fa-pinterest-square"></i></a>
						        </p>	                  
			                </div>
			            </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
</div>

<div class="panel col-lg-12 col-xs-12 no-padding gridbox">
		<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       Sub Categorie		        
			    </div>
		</header>
		<?php for ($i=0; $i <= 15 ; $i++) { ?>
	    <div class="panel-body col-lg-3 col-sm-4 col-xs-12 inner-gridbox">                    
	            <div class="media">
	                <a href="#" >
	                    <img alt="" src="assets/images/photos/user1.png" class="avatar avatar-lg avatar-circle">
	                </a>
	                <div class="media-body">
	                    <h5 class="media-heading"><a href="#"><strong>Myname Sample 1</strong></a></h5>
	                    <p>Kse Car Wash</p>
	                	<p class="text-muted" style="font-size:20px;">
				            <a href="#"><i class="fa fa-envelope"></i></a>
				            <a href="#"><i class="fa fa-facebook-square"></i></a>
				            <a href="#"><i class="fa fa-instagram"></i></a>
				            <a href="#"><i class="fa fa-twitter"></i></a>
				            <a href="#"><i class="fa fa-pinterest-square"></i></a>
				        </p>	                  
	                </div>
	            </div>
	    </div>
	    <?php } ?>
</div>

@stop

@section('script_bottom')

<script src="<?php echo asset('assets/js/icheck-init.js') ?>"></script>
<script src="<?php echo asset('assets/js/jquery.nicescroll.js') ?>"></script>
<script src="<?php echo asset('assets/js/iCheck/jquery.icheck.min.js') ?>"></script>


@stop

