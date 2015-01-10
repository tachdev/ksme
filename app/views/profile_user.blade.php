@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-8 no-padding" >

		<div class="panel col-lg-12 no-padding">
			  	<header class="panel-heading bg-green">
			  		<h5><a href="#" style="color:yellow"><strong>My Profile</strong></a> | <a href="#" style="color:#fff;"><strong>My Business</strong></a> </h5>
			  	</header>
			  	<div class="panel-body col-lg-4" style="text-align:center;">
			  		<div class="avatar"><img src="assets/images/photos/user2.png" class="avatar-lg avatar-circle" alt=""></div>
			  		<h5>
			            <a href="#" style="color:#000;">Name Surname</a>			            
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
	                                <div class="title"><strong>Name</strong></div>
	                                <div class="desk">Yourname</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Surname</strong></div>
	                                <div class="desk">Mysurname</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Nickname</strong></div>
	                                <div class="desk">John</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Tagline</strong></div>
	                                <div class="desk">
	                                 Hello Ksme Network This is my profile.
	                                 </div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Birthday</strong></div>
	                                <div class="desk">17 Sep 1985</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Age</strong></div>
	                                <div class="desk">29</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Sex</strong></div>
	                                <div class="desk">Male</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Ksme Region</strong></div>
	                                <div class="desk">Bangkok</div>
	                            </li>
	                            <li>
	                                <div class="title"><strong>Ksme รุ่นที่</strong></div>
	                                <div class="desk">9</div>
	                            </li>
	                        </ul>
	                    </div>
				    </div>                            			   
				</div>
        </div>
		<div class="col-lg-12 no-padding">
			  	<div class="panel">
		        	<div class="panel-body no-padding">
		        			<div class="panel-body col-lg-4">
		        				<div class="btn btn-xs btn-success btn-round mg-b-sm">Work And Education</div>
			        		</div>        
					    	<div class="panel-body col-lg-8">
		                        <ul class="p-info">
		                            <li>
		                                <div class="title"><strong>Education Level</strong></div>
		                                <div class="desk">Master Degree  <span class="pull-right"> + Add More</span></div>

		                            </li>
		                            <li>
		                                <div class="title"><strong>Education Place</strong></div>
		                                <div class="desk">Standford International University</div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Work At</strong></div>
		                                <div class="desk">Ark For Mor <span class="pull-right"> + Add More</span></div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Title</strong></div>
		                                <div class="desk">N/A</div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Year Work</strong></div>
		                                <div class="desk">3</div>
		                            </li>
		                        </ul>	                        
		                    </div>
		                                       			   
					</div>
        	  </div>
        	  <div class="panel">
		        	<div class="panel-body no-padding">
		        			<div class="panel-body col-lg-4">
			        			<div class="btn btn-xs btn-success btn-round mg-b-sm">Contact</div>
			        		</div>    
					    	<div class="panel-body col-lg-8">
		                        <ul class="p-info">
		                            <li>
		                                <div class="title"><strong>Address</strong></div>
		                                <div class="desk">323 Adress road Bangkok Thailand 10020</div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Phone</strong></div>
		                                <div class="desk">02-200-5846</div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Mobile</strong></div>
		                                <div class="desk">089-114-5879</div>
		                            </li>
		                            <li>
		                                <div class="title"><strong>Website</strong></div>
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
		                                           			   
					</div>
        	  </div>
        	  <div class="panel" style="overflow:hidden">
        	  		<div class="panel-body col-lg-2">
	        			<div class="btn btn-xs btn-success btn-round mg-b-sm">About</div>
	        		</div>    
			    	<div class="panel-body col-lg-10">
                       <p><strong>Special List</strong> :  Bicycle Swimming</p>
			    	    <p><strong>Hobby</strong> :  Painting</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        	when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        	It has survived not only five centuries, but also the leap into electronic typesetting, 
                        	remaining essentially unchanged. It was popularised in the 1960s with the release of 
                        	Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                        	publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>   
                        
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
		                    <h5 class="media-heading rate-icon" style="display:inline-block;">
		                    	<a href="#"><strong>Give Rating</strong></a>
		                    	<span style="color:yellow;">
		                          	<?php for ($j=1; $j <= 5 ; $j++) { ?>
				        	 			<i class="fa fa-star"></i>
				        	 		<?php } ?> 
	              				</span>
		                    </h5>
		                    <p></p>
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
	                    	<span style="color:yellow">
	                          	<?php for ($j=1; $j <= 5 ; $j++) { ?>
			        	 			<i class="fa fa-star"></i>
			        	 		<?php } ?> 
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