@extends('layout')

@section('script_top')

<link href="<?php echo asset('assets/css/datepicker-custom.css') ?>" rel="stylesheet">
<link href="<?php echo asset('assets/css/daterangepicker-bs3.css') ?>" rel="stylesheet">
<link href="<?php echo asset('assets/css/fileinput.min.css') ?>" rel="stylesheet">

@stop

@section('content')
<!--center side-->
<div class="col-lg-12 col-xs-12 no-padding">
      	<section class="panel" style="background:none;">
            <header class="panel-heading">
                <strong>Create Events</strong>
                <button class="btn btn-danger pull-right btn-round" type="button">Create Event</button>
            </header>
            <div class="panel-body">
                <form class="create-event no-padding" role="form">
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-6 col-xs-12 no-padding">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Topic:</strong></span>
                                <span><input type="text" class="form-control pull-left" placeholder="Topic" style="width:70%;"></span>
                        </div>
                        <div class="form-group col-lg-6 col-xs-12 no-padding">
                                <span style="width:20%;" class="pull-left mg-t-xs"><strong>Date:</strong></span>
                                <span><input type="text" class="form-control pull-right default-date-picker" placeholder="Date" style="width:75%;"></span>
                                <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-4 col-xs-12 no-padding">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Start Time:</strong></span>
                                <span><input type="text" class="form-control pull-left mg-r-sm" placeholder="Start Time : ex.17.00 น.  " style="width:60%;"></span>
                        </div>
                        <div class="form-group col-lg-4 col-xs-12 no-padding">
                                <span style="width:20%;" class="pull-left mg-t-xs"><strong>End:</strong></span>
                                <span><input type="text" class="form-control pull-left mg-r-sm" placeholder="End Time : ex.18.00 น.  " style="width:75%;"></span>
                        </div>
                        <div class="form-group col-lg-4 col-xs-12 no-padding">
                                <span style="width:20%;" class="pull-left mg-t-xs"><strong>Expense:</strong></span>
                                <span><input type="number" class="form-control pull-right"  style="width:75%;" value=""></span>
                        </div>
                    </div> 
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-8 col-xs-12 no-padding">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Detail:</strong></span>
                                <span><textarea class="form-control pull-left event-textarea" placeholder="Please Insert Detail"></textarea></span>
                                
                        </div>
                        <div class="form-group col-lg-4 col-xs-12 no-padding">
                        <span class="input-file-button">
                            <p class="mg-t-sm"><strong>Browse Photo</strong></p>
                            <span class="pic-logo"><i class="fa fa-plus photo-plus"></i></span>                           
                            <p class="mg-t-sm name_file">no image upload</p>
                        </span>
                         <input type="file" id="my_file_upload" style="display:none;" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 no-padding">
                        <div class="form-group no-padding" style="margin-bottom:15px;overflow:hidden">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Location:</strong></span>
                                <span><input type="text" class="form-control pull-left" placeholder="Insert Event Location" style="width:75%;"></span>
                        </div>
                        <div class="form-group no-padding" style="margin-bottom:15px;overflow:hidden">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Attachment:</strong></span>
                                <span>
                                    <div class="form-group" style="width:90%">
                                        <input id="file-1" class="file" type="file" multiple="true" data-show-upload="false" data-show-preview="false">
                                    </div>
                                </span>
                        </div>
                        <div class="form-group no-padding" style="margin-bottom:15px;overflow:hidden">
                                <span style="width:100px;" class="pull-left mg-t-xs"><strong>Invite:</strong></span>
                                <span><input type="text" class="form-control pull-left" placeholder="Topic" style="width:75%;"></span>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-xs-12 pull-right no-padding">
                        <label class="control-label col-md-1 no-padding"><strong>Map</strong></label>
                        <div class="col-lg-12 no-padding">                            
    						<div id="map-canvas"></div>
                        </div>
                        <input id="pac-input" class="controls form-control" style="width:40%;margin-top:2%;border:2px solid #666;" type="text" placeholder="Insert Location">
                        
                    </div>
                    <div class="form-group col-lg-12 col-xs-12 pull-right no-padding">
                        <button class="btn btn-success col-lg-2 pull-right btn-round" type="button">Post</button>
                        <button class="btn btn-default col-lg-2 pull-right mg-r-sm btn-round" type="button">Cancel</button>
                    </div>
                    
                </form>
            </div>
    	</section>
</div>

@stop

@section('script_bottom')

   <script src="<?php echo asset('assets/js/bootstrap-fileupload.min.js') ?>"></script>
   <script src="<?php echo asset('assets/js/bootstrap-datepicker.js') ?>"></script>
   <script src="<?php echo asset('assets/js/daterangepicker.js') ?>"></script>
   <script src="<?php echo asset('assets/js/pickers-init.js') ?>"></script>
   <script src="<?php echo asset('assets/js/fileinput.js') ?>"></script>

   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
   <script>


        $(document).ready(function(){

            $("#my_file_upload").change(function(){

                var val = document.getElementById('my_file_upload');
                var filename = val.value.split(/(\\|\/)/g).pop();
                $("p.name_file").html(filename);
                $("span.pic-logo").html('<i class="fa fa-picture-o photo-plus"></i>');
            });
        });

        $("span.input-file-button").on("click", function(){

            $("#my_file_upload").click();

        });

    

	function initialize() {

			  var markers = [];
			  var map = new google.maps.Map(document.getElementById('map-canvas'), {
			    mapTypeId: google.maps.MapTypeId.ROADMAP
			  });

			  var defaultBounds = new google.maps.LatLngBounds(
			      new google.maps.LatLng(-33.8902, 151.1759),
			      new google.maps.LatLng(-33.8474, 151.2631));
			  map.fitBounds(defaultBounds);

			  var input = (document.getElementById('pac-input'));
			  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

			  var searchBox = new google.maps.places.SearchBox(
			    /** @type {HTMLInputElement} */(input));

			  // [START region_getplaces]
			  // Listen for the event fired when the user selects an item from the
			  // pick list. Retrieve the matching places for that item.
			  google.maps.event.addListener(searchBox, 'places_changed', function() {
			    var places = searchBox.getPlaces();

			    if (places.length == 0) {
			      return;
			    }
			    for (var i = 0, marker; marker = markers[i]; i++) {
			      marker.setMap(null);
			    }

			    // For each place, get the icon, place name, and location.
			    markers = [];
			    var bounds = new google.maps.LatLngBounds();
			    for (var i = 0, place; place = places[i]; i++) {
			      var image = {
			        url: place.icon,
			        size: new google.maps.Size(71, 71),
			        origin: new google.maps.Point(0, 0),
			        anchor: new google.maps.Point(17, 34),
			        scaledSize: new google.maps.Size(25, 25)
			      };

			      // Create a marker for each place.
			      var marker = new google.maps.Marker({
			        map: map,
			        icon: image,
			        title: place.name,
			        position: place.geometry.location
			      });

			      markers.push(marker);

			      bounds.extend(place.geometry.location);
			    }

			    map.fitBounds(bounds);
			  });
			  // [END region_getplaces]

			  // Bias the SearchBox results towards places that are within the bounds of the
			  // current map's viewport.
			  google.maps.event.addListener(map, 'bounds_changed', function() {
			    var bounds = map.getBounds();
			    searchBox.setBounds(bounds);
			  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	</script>


@stop