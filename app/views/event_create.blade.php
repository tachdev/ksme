@extends('layout')

@section('script_top')

<link href="<?php echo asset('assets/css/bootstrap-fileupload.min.css') ?>" rel="stylesheet">
<link href="<?php echo asset('assets/css/datepicker-custom.css') ?>" rel="stylesheet">
<link href="<?php echo asset('assets/css/daterangepicker-bs3.css') ?>" rel="stylesheet">
<link href="<?php echo asset('assets/js/dropzone/css/dropzone.css') ?>" rel="stylesheet">


@stop

@section('content')
<!--center side-->
<div class="col-lg-12 col-xs-12 no-padding">
      	<section class="panel" style="background:none;">
            <header class="panel-heading">
                Create Events
            </header>
            <div class="panel-body">
                <form class="form-horizontal col-lg-12 col-xs-12 create-event no-padding" role="form">
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-6 col-xs-12">
                                <label class="col-lg-2 col-sm-3 control-label"><strong>Topic:</strong></label>
                                <div class="col-lg-10 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                        <div class="form-group col-lg-6 col-xs-12">
                                <label class="col-lg-2 col-sm-3 control-label"><strong>Date:</strong></label>
                                <div class="col-lg-10 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic" style="width:100%;">
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-4 col-xs-12">
                                <label class="col-lg-3 col-sm-3 control-label"><strong>Start:</strong></label>
                                <div class="col-lg-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                        <div class="form-group col-lg-4 col-xs-12">
                                <label class="col-lg-3 col-sm-3 control-label"><strong>End:</strong></label>
                                <div class="col-lg-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                        <div class="form-group col-lg-4 col-xs-12" style="margin-right:0;">
                                <label class="col-lg-4 col-sm-3 col-xs-12 control-label"><strong>Expense:</strong></label>
                                <div class="col-lg-8 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic" style="padding-right:0;">
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 no-padding">
                        <div class="form-group col-lg-9 col-xs-12">
                            <label style="width:75px;float:left;" class="control-label col-xs-12"><strong>Details :</strong></label>
                            <div class="col-lg-10 col-xs-12 col-sm-9">
                                <textarea rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-lg-6 col-xs-12 no-padding">
                        <div class="form-group col-lg-12">
                                <label class="col-lg-2 col-sm-3 control-label"><strong>Location</strong></label>
                                <div class="col-lg-10 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                        <div class="form-group col-lg-12">
                                <label class="col-lg-2 col-sm-3 control-label"><strong>File</strong></label>
                                <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                        <div class="form-group col-lg-12">
                                <label class="col-lg-2 col-sm-3 control-label"><strong>Invite</strong></label>
                                <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Topic">
                                </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-xs-12">
                        <label class="control-label col-md-1"><strong>Map</strong></label>
                        <div class="col-lg-9">                            
    						<div id="map-canvas"></div>
                        </div>
                        <input id="pac-input" class="controls form-control" style="width:40%;margin-top:2%;border:2px solid #666;" type="text" placeholder="Insert Location">
                        
                    </div>
                    
                    <div class="form-group col-lg-12 col-xs-12">
                        <label class="control-label col-md-3"></label>
                        <div class="col-lg-12">                            
                            <button class="btn btn-danger pull-right" type="button">Create Event</button>
                            <button class="btn btn-warning pull-right mg-r-sm" type="button">Cancel</button>
                        </div>
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
   <script src="<?php echo asset('assets/js/dropzone/dropzone.js') ?>"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
   <script>

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