@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-8 col-xs-12 no-padding" >

    	<div class="panel">
			<div class="panel-body">			    
			    <div class="item active col-lg-12 no-padding mg-b-sm">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-12 no-padding image-border-sm" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			        <img src="assets/images/blog/image2.jpg" class="img-responsive col-lg-2 no-padding image-border-sm img-mobile-half" alt="Responsive image">
			    </div> 
			    <div class="col-lg-6 col-xs-12 no-padding pd-r-sm font-smaller mg-t-sm">
				    <p>
				    	<button class="btn btn-danger pull-left col-lg-5 mg-r-sm" type="submit">Sale&nbsp;</button> 
				    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				    	Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				    	when an unknown printer took a galley of type and scrambled it 
				    </p>
				    <p><strong>Post BY</strong> : John Doe</p>                         
				    <p><strong>Date</strong> : 13/12/11</p>                         
				    <p class="auth-row mg-t-sm feed-box">
				       <a href="#" class="btn btn-success font-white"><i class="fa fa-thumbs-o-up mg-r-xs"></i>  LIKE</a>   |   <a href="#" >COMMENT</a>   | <a href="#">SHARE</a>
				    </p>
				    <hr style="margin:0">
				    <p class="auth-row mg-t-sm feed-box" style="font-size:13px;">
				       <i class="fa fa-thumbs-o-up mg-r-xs"></i><a href="#">You</a> , <a href="#" >Sai Man</a> , <a href="#">Devid Beckham</a>
				    </p>
				</div>
				<div class="col-lg-6 col-xs-12 pd-t-sm pd-b-sm bg-greylight">
				    <div class="media" style="font-size:12px;margin-top:15px;">
				        <a href="#" class="pull-left">
				            <img alt="" src="assets/images/blog/blog-avatar-2.jpg" class="avatar-xs avatar-circle">
				        </a>
				        <div class="media-body">
				            <p class="media-heading">
				                <a href="#" class="mg-r-sm"><strong>Devid Beckham</strong></a>  
				                Ut enim ad minima veniam
				            </p>
				            <div class="bl-status">
				                <span class="pull-left">About 10 Min ago&nbsp;</span>
				                <span class="pull-left">&nbsp;<a href="#">Like</a>&nbsp;</span>
				                <span>&nbsp;<i class="fa fa-thumbs-o-up mg-r-xs"></i>&nbsp;1</span>
				            </div>
				        </div>
				    </div>
				    <div class="media" style="font-size:12px;margin-top:15px;">
				        <a href="#" class="pull-left">
				            <img alt="" src="assets/images/blog/blog-avatar-2.jpg" class="avatar-xs avatar-circle">
				        </a>
				        <div class="media-body">
				            <p class="media-heading">
				                <a href="#" class="mg-r-sm"><strong>Devid Beckham</strong></a>  
				                Ut enim ad minima veniam
				            </p>
				            <div class="bl-status">
				                <span class="pull-left">About 10 Min ago&nbsp;</span>
				                <span class="pull-left">&nbsp;<a href="#">Like</a>&nbsp;</span>
				                <span>&nbsp;<i class="fa fa-thumbs-o-up mg-r-xs"></i>&nbsp;1</span>
				            </div>
				        </div>
				    </div>
				    <div class="media" style="font-size:12px;">
				    <form role="form" class="form-inline ng-pristine ng-valid">
				        <a href="#" class="pull-left mg-r-sm">
				            <img alt="" src="assets/images/photos/user1.png" class="avatar-xs avatar-circle">
				        </a>
				        <div class="form-group col-lg-6 col-xs-5 no-padding">
				            <input type="text" placeholder="Please Insert Comment" class="form-control" style="width:110%;">
				        </div>
				        <button class="btn btn-success pull-right font-smaller btn-feed" type="submit">Comments</button>
				    </form>
					</div>
				</div>
			   
			</div>
		</div>
        
</div>
<!--right side-->
<div class="col-md-4 col-xs-12 right-side">
        
        @include('element.last_event')
        @include('element.tabbox')
        @include('element.poad')
        
</div>
@stop

