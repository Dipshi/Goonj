@extends('layouts.header')
@section('body')
<div class="row">
    <div class="col-md-6">
        <div id="form-content">
<form   method="post" name="sub"> 
{{ csrf_field() }}
<input type="text" value="1" name="val"/><br><br>
<label> Enter your comments</label>
<textarea  name="text" name="text" /></textarea><br>
<input type="submit" value="Submit"/>
</form>
          </div>
      </div>
      <div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
</div>

<script>
function myMap() {
  myCenter=new google.maps.LatLng(19.0328, 72.8964);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: true, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9O-AXtbfZziiqH_pCeD4SZyJui8eCyFw&callback=myMap"></script>
<!--
{{-- <script>
        $("form[name=sub]").submit(function(event) {
            $.ajax({
                url: '/contactus',
                data: {value: $("input[name=text]").val()},
                type: 'POST'
            }).promise().then(function(data) {
               console.log(data);
            });
            // Stop the forms default action method
            event.preventDefault();
        });
    </script> --}}

@stop