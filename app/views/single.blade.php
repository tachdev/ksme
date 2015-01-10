@extends('layout')

@section('content')
<!--center side-->
<div class="col-md-12 no-padding" >
    <div class="panel single-page">
        <header class="panel-heading">
            <div class="avatar pull-left mg-r-sm"><img src="assets/images/photos/user1.png" class="avatar-sm avatar-circle" alt=""></div>
            <div class="activity-desk">
                <h5>
                    <a href="#"><strong>Jonathan Smith</strong></a>
                    <small class="pull-right">Posted : December,2014 </small>
                </h5>
                <p class="text-muted" style="font-size:20px;">
                    <a href="#"><i class="fa fa-envelope"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square"></i></a>
                </p>

            </div>
        </header>
        <div class="panel-body">
            <p>Neque porro quisquam est qui dolo rem ipsum quio</p>
            <div class="item active">
                <img src="assets/images/blog/image2.jpg"  class="img-mobile">
            </div>                            
            <p class="auth-row mg-t-sm feed-box">
               <a href="#">LIKE</a>   |   <a href="#" >COMMENT</a>   | <a href="#">SHARE</a>
            </p>
            <hr style="margin:0">
            <p class="auth-row mg-t-sm feed-box" style="font-size:13px;">
               <i class="fa fa-thumbs-o-up mg-r-xs"></i><a href="#">You</a> , <a href="#" >Sai Man</a> , <a href="#">Devid Beckham</a>
            </p>
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
        <div class="panel-footer col-lg-12" style="background-color:#fff;float:none;overflow:hidden">
             <form role="form" class="form-inline">
                <a href="#" class="pull-left mg-r-sm">
                    <img alt="" src="assets/images/photos/user1.png" class="avatar-xs avatar-circle">
                </a>
                <div class="form-group col-lg-9 col-xs-6 no-padding">
                    <input type="text" placeholder="Please Insert Comment" class="form-control" style="width:100%;">
                </div>
                <button class="btn btn-primary pull-right" type="submit">Comments</button>
            </form>
        </div>
    </div>
</div>


@stop

@section('script_bottom')

    <script type="text/javascript">
        $(function() {
            $('.banner').unslider({
                speed: 50,               //  The speed to animate each slide (in milliseconds)
                delay: 30000,              //  The delay between slide animations (in milliseconds)
                dots: true,               //  Display dot navigation
                fluid: true              //  Support responsive design. May break non-responsive designs
            });
        });
    </script>

@stop
