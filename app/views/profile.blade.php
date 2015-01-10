@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-8 no-padding" >

		<div class="panel col-lg-12 no-padding">
			  	<header class="panel-heading bg-green">
			  		<h5><strong><a class="btn btn-danger mg-r-sm" href="<?php echo url('profile_user'); ?>">My Profile</a></strong><strong><a class="btn btn-primary" href="<?php echo url('profile'); ?>">My Business</a></strong> </h5>
			  	</header>
			  	<div class="panel-body col-lg-4" style="text-align:center;">
			  		<div class="avatar"><img src="assets/images/company/2.png" class="avatar-lg avatar-circle" alt=""></div>
			  		<h5>
			            <a href="#"><strong>Business Name</strong></a>			            
			        </h5>
			        <p class="rating">
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                  	</p>
			  	</div>
	        	<div class="panel-body no-padding col-lg-8">
				    <div class="item active">
				    	<div class="panel-body">
	                        <ul class="p-info">
	                            <li>
	                                <div class="title">Name</div>
	                                <div class="desk">Kbank</div>
	                            </li>
	                            <li>
	                                <div class="title">Categorie</div>
	                                <div class="desk">Financial</div>
	                            </li>
	                            <li>
	                                <div class="title">Description</div>
	                                <div class="desk">
	                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
	                                 Lorem Ipsum has been the industry.
	                                 </div>
	                            </li>
	                            <li>
	                                <div class="title">Info</div>
	                                <div class="desk">Lorem Ipsum is simply</div>
	                            </li>
	                            <li>
	                                <div class="title">Slogan</div>
	                                <div class="desk">Dummy Text Of The Printing</div>
	                            </li>
	                        </ul>
	                    </div>
				    </div>                            			   
				</div>
        </div>
		<div class="col-lg-12 no-padding">
			  	<div class="panel">
			  		<header class="panel-heading">
			  			<h5><strong>Contact</strong></h5>
			  		</header>
		        	<div class="panel-body no-padding">
					    	<div class="panel-body col-lg-6">
		                        <ul class="p-info">
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
		                        <p class="text-muted mg-t-md" style="font-size:20px;">
						            <a href="#"><i class="fa fa-envelope"></i></a>
						            <a href="#"><i class="fa fa-facebook-square"></i></a>
						            <a href="#"><i class="fa fa-instagram"></i></a>
						            <a href="#"><i class="fa fa-twitter"></i></a>
						            <a href="#"><i class="fa fa-pinterest-square"></i></a>
						        </p>
		                        
		                    </div>
		                    <div class="panel-body col-lg-6">
			        			<div class="location-map">
			                        <div id="map-canvas" class="border-sm"></div>
			                    </div>
			        		</div>                           			   
					</div>
        	  </div>
			  
			<div class="col-lg-12 no-padding">					
	        	<div class="panel col-lg-12 no-padding">
	        		<header class="panel-heading">
			  			<h5><strong>Our Product</strong></h5>
			  		</header>
	        		<?php for ($i=1; $i <= 4 ; $i++) { ?>
		        	<div class="panel-body col-lg-3">
					     <img src="assets/images/product/pic_<?php echo $i; ?>.png"  class="img-responsive" alt="Responsive image">                     			   
					</div>
					<?php } ?>
	        	</div>
	        	
	    	</div>

        	

		</div>
</div>
<!--right side-->
<div class="col-md-4 right-side">
      	<div class="panel">
			<header class="panel-heading"><i class="fa fa-pencil"></i>   Review</header>
		    <div class="panel-body">
		    	
		       	<form  role="form">
		       		<div class="media">
		                <div class="media-body">
		                    <h5 class="media-heading"><a href="#"><strong>Give Rating</strong></a></h5>
		                    <p>
		                    	<span class="rating" style="font-size:15px">
	                              <span class="star"></span>
	                              <span class="star"></span>
	                              <span class="star"></span>
	                              <span class="star"></span>
	                              <span class="star"></span>
	                  			</span>
	                  		</p>
		                </div>
	            	</div>
		       		<a href="#" class="pull-left">
	                    	<img alt="" src="assets/images/photos/user1.png" class="avatar avatar-xs avatar-circle">
                	</a>
                    <div class="form-group" style="overflow:hidden">                    	
	                	<div class="col-lg-12">
                        	<textarea class="form-control mg-b-sm"  placeholder="Review Business"></textarea>                     	
                    	</div>
                    </div>
                    
            	</form>
		    </div>
		    <?php for ($i=1; $i <=4 ; $i++) { ?>
		    <div class="panel-body" style="padding-top:0;">
			    <div class="media">
	                <a href="#" class="pull-left">
	                    <img alt="" src="assets/images/photos/user<?php echo $i; ?>.png" class="avatar avatar-xs avatar-circle">
	                </a>
	                <div class="media-body">
	                	<p>
	                    	<span class="rating" style="font-size:15px">
	                          <span class="star"></span>
	                          <span class="star"></span>
	                          <span class="star"></span>
	                          <span class="star"></span>
	                          <span class="star"></span>
	              			</span>
	              		</p>
	                    <h5 class="media-heading"><a href="#"><strong>Myname Sample <?php echo $i; ?></strong></a></h5>	                    	                    
	                    <p class="font-normal">
	                        Donec id elit non mi porta gravida at eget metus amet int
	                    </p>
	                    <small class="font-small"><i class="fa fa-clock-o"></i>  December 11,2014  3:31pm</small>
	                </div>
	        	</div>
       		 </div>
       		 <?php } ?>

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