<?php
$title = "Contact";
include "partials/header.php";
include "partials/nav.php";
?>

<div class="contact_section layout_padding py-5">
      <div class="container-fluid ">
        <div class="contact_section2">
          <div class="row align-items-center">
            <div class="col-md-6 padding_left_0">
              <div class="mail_section p-5">
              <h1 class="text-primary">Contact us</h1>
        <p class="lead">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        
                <input type="" class=" mb-2 form-control form-control-lg rounded-0" placeholder="Name" name="Name">
                <input type="" class="mb-2 form-control form-control-lg rounded-0" placeholder="Phone Number" name="Phone Number">
                <input type="" class="mb-2 form-control form-control-lg rounded-0" placeholder="Email" name="Email">
                <textarea class="form-control form-control-lg rounded-0" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                <br>
                <button class="btn btn-primary btn-lg mt-3 rounded-0 shadow-lg">Send Message</button>
              </div>
            </div>
            <div class="col-md-6 padding_0">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php 
include "partials/footer.php";
