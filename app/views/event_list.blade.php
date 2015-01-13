@extends('layout')

@section('content')
<!--center side-->
<div class="col-lg-12 col-xs-12 no-padding" >
          <div class="col-lg-12 col-xs-12 no-padding">
          	<div class="col-lg-12 col-sm-3 col-xs-12 pull-right create-event-btn-wrapper no-padding">
            		<a href="<?php echo url('create_event'); ?>" class="btn-round create-event-btn btn btn-danger btn-xs col-lg-2 col-xs-12 btn-md pull-right mg-r-sm" style="margin-right:15px;"> Create Event</a> 
        	</div> 
          	<div class="col-lg-12 no-padding mg-t-xs mg-b-xs">        	
          		<div class="col-lg-4 col-xs-12 event-sort  pull-right" style="text-align:right;">
          			<button class="btn btn-default bg-greyhard">
	                    <i class="fa fa-chevron-left"></i>
	                </button>
	                <button class="btn btn-default bg-grey">
	                    1 of 4
	                </button>
	                <button class="btn btn-default bg-greyhard">
	                    <i class="fa fa-chevron-right"></i>
	                </button>
	                <select class="form-control" style="width:50%;height:30px;float:left;font-size:11px;">
	                        <option>Sort By</option>
	                        <option>2</option>
	                        <option>3</option>
	                        <option>4</option>
	                        <option>5</option>
	                </select>
            	</div>
          		
      
            </div>
          </div>
           <div class="col-lg-12 col-xs-12" style="padding-left:0;padding-right:10px;">
	            <div class="panel">
	            	<header class="panel-heading bg-green">
		                Event List
		            </header>	
					 
		          <?php for ($i=1; $i < 16 ; $i++) { ?>
			         
					<div class="panel-body col-lg-3 event-block">
					    <div class="activity-desk">
					        <p style="margin-bottom:0;" class="calendar-event-icon">
				            	<a href="<?php echo url('event'); ?>"><strong>Name Event</strong></a><br>
				            	<small style="font-size:11px;font-weight:normal"><i class="fa fa-clock-o"></i>  Posted : <?php echo $i ?> December,2014 </small>				            
					        </p>
					        
					    </div>
					    
					    <div class="item active">
					        <a href="<?php echo url('event'); ?>"><img src="assets/images/blog/image2.jpg" class="img-responsive" alt="Responsive image"></a>
					    </div>
					    <p>Neque porro quisquam est qui dolo rem ipsum quio</p> 
					    <div style="font-size:11px;font-weight:normal;text-align:center;">Invite by <strong>&nbsp;<img src="assets/images/photos/user-avatar.png" class="avatar-xs avatar-circle">&nbsp;&nbsp;Mr. Sai Man</strong></div>                        		    
					</div>
					
		          <?php } ?>

          	</div>
		</div>
          
 
</div>
<!--right side-->
<div class="col-lg-6">
        

        
</div>
@stop



