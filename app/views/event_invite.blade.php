@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-6 col-xs-12 no-padding" >
		<div class="panel hidden-lg" style="display:block;background:none;box-shadow:none;">
			<div class="panel-body no-padding">
			<a href="<?php echo url('create_event'); ?>" class="btn btn-warning col-lg-3 mg-r-sm">Create Event</a>
            <a href="<?php echo url('create_event'); ?>"  class="btn btn-success col-lg-3  pull-right" >Join Event</a>
            <a href="<?php echo url('create_event'); ?>"  class="btn btn-danger col-lg-3 mg-r-sm pull-right">Maybe</a>
        	</div>
		</div>
        <div class="panel">
			<div class="panel-body no-padding">
			    <div class="item active" style="background:url('<?php echo asset('assets/images/blog/image2.jpg'); ?>');height:200px;">
			    	
			    </div>                            			   
			</div>
			<div class="panel-footer" style="overflow:hidden">
				 <div class="activity-desk">
			        <h4>
			            <a href="#"><strong>Your Name Event</strong></a>
			        </h4>
			        <p><strong>Topic</strong> : Event Is Test Ksme Network</p>
			        <p><strong>Date</strong>  : 15 December 2015</p>
			        <p><strong>Time</strong>  : 15:30 Am</p>
			        <p><strong>Detail</strong></p>
			        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			        	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
			        	when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
			        	It has survived not only five centuries, but also the leap into electronic typesetting, 
			        	remaining essentially unchanged.
			        </p>
			    </div>

                <a href="#file-text" class="pull-right"><i class="fa fa-file-text"></i> Attachment</a>
			</div>
		</div>
		<div class="col-lg-12 no-padding">
			  	<div class="panel">
			  		<header class="panel-heading">
			  			<h5><strong>Location</strong></h5>
			  		</header>
		        	<div class="panel-body no-padding">
		                    <div class="panel-body col-lg-12">
			        			<div class="location-map">
			                        <div id="map-canvas" class="border-sm"></div>
			                    </div>
			        		</div>                           			   
					</div>

        	  </div>
        	 
		</div>
</div>
<!--right side-->
<div class="col-md-6 col-xs-12 right-side">

		<div class="panel hidden-xs" style="display:block;background:none;box-shadow:none;">
			<div class="panel-body no-padding">
			<a href="<?php echo url('create_event'); ?>" class="btn btn-warning col-lg-3 mg-r-sm">Create Event</a>
            <a href="<?php echo url('create_event'); ?>"  class="btn btn-success col-lg-3  pull-right" >Join Event</a>
            <a href="<?php echo url('create_event'); ?>"  class="btn btn-danger col-lg-3 mg-r-sm pull-right">Maybe</a>
        	</div>
		</div>
		<div class="panel">
			<header class="panel-heading bg-green">
				<i class="fa fa-calendar-o"></i>  Invited By
			</header>
		    <div class="panel-body">
	       		<a href="#" class="pull-left mg-r-sm">
	            	<img alt="" src="assets/images/photos/user1.png" class="avatar avatar-lg avatar-circle">
	        	</a>
	        	<div class="activity-desk">
			        <h5 style="margin-top:0;">
			            <a href="#"><strong>Your Name Event</strong></a>
			            <p>
                        	Ksme Group 1
                  		</p>
			        </h5>
		            
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
      	<div class="panel">
			<header class="panel-heading">
				Joined
				<span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
			</header>
		    <div class="panel-body">
		    	<?php for ($i=1; $i <= 4 ; $i++) { ?>
		       		<a href="#" class="pull-left mg-r-sm">
	                	<img alt="" src="assets/images/photos/user<?php echo $i;?>.png" class="avatar avatar-md avatar-circle">
	            	</a>
            	<?php } ?>

		    </div>
		</div>
		<div class="panel">
			<header class="panel-heading">
				Maybe
				<span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
			</header>
		    <div class="panel-body">
		    	<?php for ($i=1; $i <= 4 ; $i++) { ?>
		       		<a href="#" class="pull-left mg-r-sm mg-b-sm">
	                	<img alt="" src="assets/images/photos/user<?php echo $i;?>.png" class="avatar avatar-md avatar-circle">
	            	</a>
            	<?php } ?>

		    </div>
		</div>  
		 <div class="panel">
		 			<header class="panel-heading">
						Comment
					</header>
		        	<div class="panel-body">

					     <form role="form" class="form-inline ng-pristine ng-valid">
					        <a href="#" class="pull-left mg-r-sm">
					            <img alt="" src="assets/images/photos/user1.png" class="avatar-xs avatar-circle">
					        </a>
					        <div class="form-group col-lg-8 col-xs-6 no-padding">
					            <input type="text" placeholder="Please Insert Comment" class="form-control" style="width:100%;">
					        </div>
					        <button class="btn btn-primary pull-right" type="submit">Comments</button>
					    </form>
                       			   
					</div>
					<div class="panel-body">
					    <div class="media" style="font-size:13px;">
					        <a href="#" class="pull-left">
					            <img alt="" src="assets/images/blog/blog-avatar-2.jpg" class="avatar-xs avatar-circle">
					        </a>
					        <div class="media-body">
					            <p class="media-heading">
					                <a href="#" class="mg-r-sm"><strong>Devid Beckham</strong></a>  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.
					            </p>
					            <div class="bl-status">
					                <div class="bl-status">
				                		<span class="pull-left">About 10 Min ago&nbsp;</span>
				                		<span class="pull-left">&nbsp;<a href="#">Like</a>&nbsp;</span>
				                		<span>&nbsp;<i class="fa fa-thumbs-o-up mg-r-xs"></i>&nbsp;1</span>
				            		</div>
					            </div>
					        </div>
					    </div>
					   
					</div>

        	  </div>  
</div>
@stop

@section('script_bottom')

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>

@stop