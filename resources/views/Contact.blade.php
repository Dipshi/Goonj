@extends('layouts.header')
@section('body')
<div  id="contact-page" class="container">
    <div class="bg">
        <h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
    </div>    	
    <div class="row">
        {{--  <div class="row">  	  --}}
            <div class="col-sm-6">
                <div class="contact-form">
                    <h2 class="title text-center">Get In Touch</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row"  method="post" >
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            {{-- <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit" id="submit"> --}}
                            <button type="submit" class="btn btn-primary  pull-right" name="submit" id="submit">Submit</button>
                        </div>
                    </form>
                    </div>
            </div>
        <div class="col-md-6">
        <div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
        </div>
    </div>
</div>
<br>
{{-- <script>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9O-AXtbfZziiqH_pCeD4SZyJui8eCyFw&callback=myMap"></script> --}}
<script type="text/javascript">

     $(document).ready(function() {
       $("#submit").click(function() {   //button id
          var loginForm = $("#main-contact-form");  //form id
          loginForm.submit(function(e){
              e.preventDefault();
              var formData = loginForm.serialize();

              /*alert(formData);*/

                 $.ajax({
                     url:'/contactus',
                     type:'post',
                     data:formData,
                     success:function(data){
                         /alert("hello"); 	//for redirecting instead of alert try below code

                        
                         
                     },
                     error: function (data) {
                         /*console.log(data);*/
                         alert("h");
                     }
                 });
             });

     /*alert('Successfully Loaded');*/
         });                 
     });</script>


@stop