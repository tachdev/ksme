@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-8 no-padding" >

        <div class="panel">
			<header class="panel-heading">
			    <div class="activity-desk">
			        <h4>
			            <a href="#"><strong>Your Name Event</strong></a>
			            <p class="pull-right" style="border:3px solid #999;padding:10px;border-radius:5px;">
                              <i class="fa fa-clock-o"></i> 17:02 | 31 DECEMBER 2014 
                      	</p>
			        </h4>
			        <p class="text-muted" style="font-size:20px;">
			            <a href="#"><i class="fa fa-envelope"></i></a>
			            <a href="#"><i class="fa fa-facebook-square"></i></a>
			            <a href="#"><i class="fa fa-instagram"></i></a>
			            <a href="#"><i class="fa fa-twitter"></i></a>
			            <a href="#"><i class="fa fa-pinterest-square"></i></a>
			        </p>

			    </div>
			</header>
			<div class="panel-body no-padding">
			    <div class="item active" style="background:url('<?php echo asset('assets/images/blog/image2.jpg'); ?>');height:200px;">
			    	
			    </div>                            			   
			</div>
			<div class="panel-footer" style="overflow:hidden">

                <button class="btn btn-success col-lg-4 mg-r-sm" type="button">Join Event</button>
                <button class="btn btn-danger col-lg-4" type="button">Maybe</button>
                <a href="#file-text" class="pull-right"><i class="fa fa-file-text"></i> Attachment</a>
			</div>
		</div>
		<div class="col-lg-12 no-padding">
				<div class="panel">
				  	<header class="panel-heading">
				  		<h5><strong>Detail</strong></h5>
				  	</header>
		        	<div class="panel-body">
					     Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					     when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					     It has survived not only five centuries,                			   
					</div>
        		</div>
			  	<div class="panel">
			  		<header class="panel-heading">
			  			<h5><strong>Contact</strong></h5>
			  		</header>
		        	<div class="panel-body no-padding">
					    	<div class="panel-body col-lg-6">
		                        <ul class="p-info">
		                        	<li>
		                                <div class="title">Time</div>
		                                <div class="desk">12 December 2014 15:30</div>
		                            </li>
		                            <li>
		                                <div class="title">Address</div>
		                                <div class="desk">323 Adress road Bangkok Thailand 10020</div>
		                            </li>
		                            <li>
		                                <div class="title">Phone</div>
		                                <div class="desk">02-200-5846</div>
		                            </li>
		                            <li>
		                                <div class="title">Mobile</div>
		                                <div class="desk">089-114-5879</div>
		                            </li>
		                            <li>
		                                <div class="title">Website</div>
		                                <div class="desk">www.kme.com</div>
		                            </li>
		                        </ul>

		                        
		                    </div>
		                    <div class="panel-body col-lg-6">
			        			<div class="location-map">
			                        <div id="map-canvas" class="border-sm"></div>
			                    </div>
			        		</div>                           			   
					</div>

        	  </div>
        	  <div class="panel">

		        	<div class="panel-body">

					     <form role="form" class="form-inline ng-pristine ng-valid">
					        <a href="#" class="pull-left mg-r-sm">
					            <img alt="" src="assets/images/photos/user1.png" class="avatar-xs avatar-circle">
					        </a>
					        <div class="form-group col-lg-9 no-padding">
					            <input type="text" placeholder="Please Insert Comment" class="form-control" style="width:100%;">
					        </div>
					        <button class="btn btn-primary pull-right" type="submit">Comments</button>
					    </form>
                       			   
					</div>

        	  </div>
        	  <div class="panel">
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
					                <span class="pull-left">About 10 Min ago</span>
					                <a href="#" class="pull-right reply">Reply</a>
					            </div>
					        </div>
					    </div>
					   
					</div>
        	  </div>
		</div>
</div>
<!--right side-->
<div class="col-md-4">

		<div class="panel">
			<a href="<?php echo url('create_event'); ?>" class="btn btn-warning col-lg-12"  style="display:block;float:none" type="button">Create Event</a>
		</div>
		<div class="panel">
			<header class="panel-heading">
				<i class="fa fa-calendar-o"></i>  Invited
			</header>
		    <div class="panel-body">
	       		<a href="#" class="pull-left mg-r-sm">
	            	<img alt="" src="assets/images/photos/user1.png" class="avatar avatar-xs avatar-circle">
	        	</a>
	        	<div class="activity-desk">
			        <h5 style="margin-top:0;">
			            <a href="#"><strong>Your Name Event</strong></a>

			        </h5>
			        <p class="text-muted" style="font-size:20px;">
			            <a href="#"><i class="fa fa-envelope"></i></a>
			            <a href="#"><i class="fa fa-facebook-square"></i></a>
			            <a href="#"><i class="fa fa-instagram"></i></a>
			            <a href="#"><i class="fa fa-twitter"></i></a>
			            <a href="#"><i class="fa fa-pinterest-square"></i></a>
			        </p>
		            <small>
                        <i class="fa fa-clock-o"></i> Date Create : 15 December 2014
                  	</small>

			    </div>
		    </div>
		</div>
      	<div class="panel">
			<header class="panel-heading">
				Going
				<span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                 </span>
			</header>
		    <div class="panel-body">
		    	<?php for ($i=1; $i <= 5 ; $i++) { ?>
		       		<a href="#" class="pull-left mg-r-sm">
	                	<img alt="" src="assets/images/photos/user<?php echo $i;?>.png" class="avatar avatar-xs avatar-circle">
	            	</a>
            	<?php } ?>

		    </div>
		    <div class="panel-body">
		    	Guest 2458 People
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
		    	<?php for ($i=1; $i <= 5 ; $i++) { ?>
		       		<a href="#" class="pull-left mg-r-sm">
	                	<img alt="" src="assets/images/photos/user<?php echo $i;?>.png" class="avatar avatar-xs avatar-circle">
	            	</a>
            	<?php } ?>

		    </div>
		    <div class="panel-body">
		    	Maybe 150 People
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