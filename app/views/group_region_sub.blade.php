@extends('layout')

@section('content')
<!--center side-->
<div class="col-lg-12 no-padding" >
	<div class="panel">
			<div class="panel-body" style="text-align:center" >				
				<div class="col-lg-6">
					<div style="text-align:left;">
						<a href="<?php echo url('group_region'); ?>" class="btn btn-success">
				       		Choose Ksme Region		        
				    	</a>
			    	</div>
			    	<div class="ksme_region_logo">
			    		<img src="assets/images/region/ksme_<?php echo Input::get('region'); ?>.png" >
			    		<p><strong>5000 users</strong></p>
			    	</div>
					<img src="assets/images/map/<?php echo Input::get('region'); ?>_map.png" class="img-fullwidth">
				</div>
				<div class="panel col-lg-6 col-xs-12 no-padding gridbox" >
					<header class="panel-heading bg-green">
						    <div class="activity-desk">
						       Sub Categorie		        
						    </div>
					</header>
					<?php for ($i=0; $i <= 11 ; $i++) { ?>
				    <div class="panel-body col-lg-4 col-sm-4 col-xs-12 inner-gridbox" style="padding:5px;">                    
				            <div class="media">
				                <a href="#" >
				                    <img alt="" src="assets/images/photos/user1.png" class="avatar avatar-md avatar-circle">
				                </a>
				                <div class="media-body region">
				                    <h5 class="media-heading"><a href="#"><strong>Myname Sample 1</strong></a></h5>
				                    <p>Kse Car Wash</p>
				                	<p class="text-muted" style="font-size:16px;">
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
	
</div>

@stop
