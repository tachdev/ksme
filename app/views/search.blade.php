@extends('layout')

@section('content')
<!--center side-->

<div class='panel bg-green'>
			<div class="panel-body">
				Search Result :  'My Search'
			</div>
		
</div>

<div class="panel col-lg-12 no-padding" style="border:2px solid #E1E1E2;margin-bottom:10px;display:inline-block">
		
		<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       People		        
			    </div>
		</header>
		<div class="DocumentList">
			<div class="row" style="overflow-x:hidden;min-width:200%;">
				<?php for ($i=0; $i <= 20 ; $i++) { ?>
			    <div class="panel-body" style="width:258px;float:none;text-align:center;border-right:1px dotted #f3f3f3;border-bottom:1px dotted #f3f3f3;display:inline-block">                    
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

<div class="panel col-lg-12 no-padding" style="border:2px solid #E1E1E2;margin-bottom:10px;display:inline-block">
		
		<header class="panel-heading bg-green">
			    <div class="activity-desk">
			       Group		        
			    </div>
		</header>
		<div class="DocumentList">
			<div class="row" style="overflow-x:hidden;min-width:200%;">
				<?php for ($i=0; $i <= 20 ; $i++) { ?>
			    <div class="panel-body" style="width:258px;float:none;text-align:center;border-right:1px dotted #f3f3f3;border-bottom:1px dotted #f3f3f3;display:inline-block">                    
			            <div class="media">
			                <a href="#" >
			                    <img alt="" src="assets/images/photos/user1.png" class="avatar avatar-lg ">
			                </a>
			                <div class="media-body mg-t-sm">
			                    <h5 class="media-heading"><a href="#"><strong>Group Name</strong></a></h5>
			                    <p>Kse Car Wash</p>
			                	<p>member : 500 people</p>	                  
			                </div>
			            </div>
			    </div>
			    <?php } ?>
			</div>
		</div>
</div>

<div class="col-md-12 no-padding" >

		
        @include('element.feedbox')

</div>

@stop


