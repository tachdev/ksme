@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-8 no-padding" >

		<div class="panel col-lg-12 no-padding">
			  	<header class="panel-heading bg-green">
			  		<h5><a href="<?php echo url('profile_user'); ?>" style="color:yellow"><strong>My Profile</strong></a> | <a href="<?php echo url('profile'); ?>" style="color:#fff;"><strong>My Business</strong></a> </h5>
			  	</header>
			  	<div class="panel-body col-lg-4" style="text-align:center;">
			  		<div class="avatar"><img src="assets/images/company/2.png" class="avatar-lg avatar-circle" alt=""></div>
			  		<h5>
			            <a href="#"><strong>Business Name</strong></a>			            
			        </h5>
			        <p class="rating">
			        	 <i style="font-size:12px;color:#fff;font-style:normal;">Rating : </i>
			        	 <?php for ($i=1; $i <= 5 ; $i++) { ?>
			        	 	<i class="fa fa-star"></i>
			        	 <?php } ?>                         
                  	</p>
			  	</div>
	        	<div class="panel-body no-padding col-lg-8">
				    <div class="item active">
				    	<div class="panel-body">
				    		<div class="btn btn-xs btn-success btn-round mg-b-sm">Info</div>
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
			  			<div class="btn btn-xs btn-success btn-round mg-b-sm">Contact</div>
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
		                            <li>
		                                <div class="title"><i class="fa fa-envelope font-large font-color-green"></i></div>
		                                <div class="desk">Ark For More Info</div>
		                            </li>
		                            <li>
		                                <div class="title"><i class="fa fa-facebook-square font-large font-color-green"></i></div>
		                                <div class="desk">Forddy.Ford</div>
		                            </li>
		                            <li>
		                                <div class="title"><i class="fa fa-instagram font-large font-color-green"></i></div>
		                                <div class="desk">Forddy.Intra</div>
		                            </li>
		                            <li>
		                                <div class="title"><i class="fa fa-twitter font-large font-color-green"></i></div>
		                                <div class="desk">Forddy.Twitter</div>
		                            </li>
		                            <li>
		                                <div class="title"><i class="fa fa-pinterest-square font-large font-color-green"></i></div>
		                                <div class="desk">Forddy.Pinterest</div>
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
			  
			<div class="col-lg-12 no-padding">					
	        	<div class="panel col-lg-12 no-padding">
	        		<header class="panel-heading">
			  			<div class="btn btn-xs btn-success btn-round mg-b-sm">Our Product</div>
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
     
     @include('element.profile_review')
	    
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