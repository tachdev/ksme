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