@extends('layout')

@section('script_top')

   <link href="<?php echo asset('assets/css/responsiveslides.css') ?>" rel="stylesheet">

@stop

@section('content')
<!--center side-->
<div class="col-md-12 col-lg-8 no-padding" >

        @include('element.slider')
        <div class="panel no-padding">
            <div class="panel-body no-padding">
                <div class="btn-group btn-group-justified tab-menu-feed">
                    <a href="#" class="btn btn-success btn-feed"> All POST</a>
                    <a href="#" class="btn btn-primary btn-feed" style="border-right:1px solid #666;border-left:1px solid #666;"> BUY POST</a>
                    <a href="#" class="btn btn-primary btn-feed"> SELL POST</a>
                </div>
            </div>
        </div>
        <div class="panel">
            <header class="panel-heading top-post-feed">
                <ul class="nav nav-pills p-option">
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-camera"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-paperclip"></i></a>
                    </li>
                </ul>
            </header>
            <div class="panel-body no-padding">
                <form>
                    <textarea class="form-control input-lg p-text-area" rows="2" placeholder="Whats in your mind today?"></textarea>
                </form> 
            </div>
            <div class="panel-body no-padding tag-feed-body">
                <div class="hash-select">
                    <?php for ($i=0; $i < 20 ; $i++) { ?>
                         <a href="#" class="btn btn-default btn-xs tag-space" type="button">#Tag-1</a>
                    <?php } ?>
               
                </div>
            </div>
            <footer class="panel-footer footer-post-feed" style="overflow:hidden;height:auto;background:#f6f7f9;border:0;">                           
                <button class="btn btn-post pull-right">&nbsp;Post&nbsp;</button>
                <div class="btn-group pull-right mg-r-sm tag-select">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Choose Your Tag <span class="caret"></span></button>
                </div>
                
            </footer>
        </div>
       

        @include('element.feedbox')
</div>
<!--right side-->
<div class="col-md-12 col-lg-4 right-side">
        
        @include('element.last_event')
        @include('element.tabbox')
        @include('element.poad')
        
</div>
@stop

@section('script_bottom')
    
   <script src="<?php echo asset('assets/js/responsiveslides.min.js') ?>"></script>
  
   <script>
   $(document).ready(function() {
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
      });

      $(".tag-select").click(function(){
            $(".tag-feed-body").toggle();
      });

    });
  </script>

@stop


