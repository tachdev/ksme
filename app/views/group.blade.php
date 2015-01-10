@extends('layout')

@section('content')
<!--center side-->
<div class="col-lg-12 no-padding" >
	<h4>
        <a href="#"><strong>Business Group Name</strong></a>
    </h4>
	<div class="panel">
			<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       About			        
			    </div>
			</header>
			<div class="panel-body">
				<p><strong>description</strong></p>
			        <p class="font-small" style="font-weight:normal"> 
			        	is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
			        	standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
			        	it to make a type specimen book. It has survived not only five centuries, but also the leap
		        </p>
			</div>
	</div>
	
	<div class="panel col-lg-12 col-xs-12 no-padding gridbox">
		<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       Member		        
			    </div>
		</header>
		<?php for ($i=0; $i <= 20 ; $i++) { ?>
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
	
</div>

@stop

