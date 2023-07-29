<?php
$title = "Home";
include "partials/header.php";
include "partials/nav.php";
?>

<!-- hero section with carousel -->
<section class="hero_img py-0">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6 pb-4 px-5">
        <h1 class="text-primary display-2">UNITED WOMEN </h1>
        <h3>FOR SUSTAINABLE DEVELOPMENT</h3>
        <p class="lead">is a women initiated, manage and children development 
          voluntary organization working in the remotes zone of Bong County. With the 
          initiative of some self-motived energetic women social worker,
           it was established to support women and farmers 
        </p>
        <!-- <h2 class="text-primary">We <span class="text-primary" id="typed"></span>
        </h2>
        <div id="typed-strings">
          <p>Help eradicate poverty</p>
          <p>Preach the raw gospel</p>
          <p>Promote girls education</p>
          <p>are non profit organization </p>
        </div>

        <script type="text/javascript">
          var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            backSpeed: 70,
            typeSpeed: 90,
            loop: true,
            backDelay: 700
          });
        </script> -->
        <a href="about.php" class="btn btn-lg btn-success mt-3 shadow-sm  px-4">Read More </a>
        <a href="contact.php" class="btn btn-lg btn-warning mt-3 shadow-sm  px-4">Contact Us</a>
      </div>
      <div class="col-md-6 px-0">
          <img src="imgs/1theirpic.png" class="img-fluid" alt="their pics">
      </div>
    </div>
  </div>
  </div>

  <section>
    <div class="container py-5 ">
     <div class="row align-items-center py-5">
      <div class="col-md-8">
      <h2 class="text-primary">AIMS AND OBJECTIVES</h2>
      <p class="lead">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex numquam 
      illo, molestias consequuntur nisi soluta quidem reprehenderit voluptatem 
      nulla laborum? Saepe expedita 
      qui tempora dignissimos necessitatibus? Provident soluta tempore odit!
      </p>
      <a href="about.php" class="btn btn-lg rounded-0 btn-warning">Read More</a>
      </div>
      <div class="col-md-4">
        <img src="imgs/theirpic24.png" class="img-fluid" alt="">
      </div>
     </div>
    </div>
  </section>
</section>


<!-- course category section-->
<section class=" px-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8 offset-md-2 text-primary text-center">
      <h2 class="text-primary text-uppercase">What Do We Do?</h2>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur 
        adipisicing elit. Ipsa illum asperiores nam deserunt veritatis, 
        adipisci dolorum, expedita labore atque ad deleniti esse 
        repudiandae aperiam doloremque voluptatibus suscipit magnam, voluptate quaerat.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 py-5">
        <div class="card bg-light border  shadow-sm py-5">
          <div class="card-body  text-center">
          <i class="bi bi-cash-coin text-success display-2"></i>
            <h4>Fight Povery</h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam 
            nulla, modi voluptatum aut vel odit corrupti deleniti.
            <a href="about.php"  class="mt-3 btn-outline-primary px-4 rounded-0 btn">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-5">
        <div class="card bg-light border shadow-sm py-5">
          <div class="card-body  text-center">
          <i class="bi text-success display-2 bi-umbrella"></i>
            <h4>Advocacy</h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam 
            nulla, modi voluptatum aut vel odit corrupti deleniti.
            <a href="about.php"  class="mt-3 btn-outline-primary rounded-0 px-4  btn">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 py-5">
        <div class="card bg-light border  py-5">
          <div class="card-body  text-center">
          <i class="bi display-2 text-success bi-minecart-loaded"></i>
            <h4>Agriculture</h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam 
            nulla, modi voluptatum aut vel odit corrupti deleniti.
            <a href="about.php"  class="mt-3 btn-outline-primary rounded-0 px-4  btn">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3  py-5">
        <div class="card border bg-light py-5">
          <div class="card-body  text-center">
          <i class="bi text-success display-2 rounded-0 bi-pencil-square"></i>
            <h4>Education</h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam 
            nulla, modi voluptatum aut vel odit corrupti deleniti.
            <a href="about.php"  class="mt-3 px-4 btn-outline-primary btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container mt-5 py-5">
    <div class="row">
      <!-- latest news -->
      <div class="col-12 px-2 bg-lightpt-2">
        <div class="card">
          <div class="card-body text-center">
          
          <div class="row">
            <div class="col-md-10 offset-md-1">
            <h2 class="text-primary" style="font-weight: bolder;">Our Latest News </h2>
          <p class="lead mb-4">
            UWSD has and is still executing project that benefit resident of Bong County and the country(Liberia) all over. You can 
            access these projects and programs of our day daily news. The latest are as follow. 
          </p>
            </div>
          </div>
          
          <div class="row mb-2">
              <?php include "partials/latestnews.php" ?>
          </div>
        <a href="news.php" class="btn mb-3 mt-4 btn-lg btn-primary rounded-pill  shadow-sm">
          More Articles
        </a>
          </div>
        </div>
      </div>
      <!-- latest newsends here -->
    </div>
  </div>

  
<section class="alert counterDiv text-warning mt-2">
<div class="container py-5">
  <div class="row">
    <div class="col-md-3 py-5 text-center">
    <i class="bi display-2 bi-bezier"></i>
      <h1>100+</h1>
      <h5>Projects completed</h5>
    </div>
    <div class="col-md-3 py-5 text-center">
    <i class="bi display-2 bi-people"></i>
      <h1>75+</h1>
      <h5>Vibrant Volunteers</h5>
    </div>
    <div class="col-md-3 py-5 text-center">
    <i class="bi display-2 bi-coin"></i>
      <h1>21+</h1>
      <h5>International Sponsors</h5>
    </div>
    <div class="col-md-3 py-5 text-center">
    <i class="bi display-2 bi-house"></i>
      <h1>8+</h1>
      <h5>Branches in Liberia</h5>
    </div>
  </div>
</div>

 <!-- <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-danger" style="font-weight: bolder;"><i class="bi bi-calendar-date"></i> Our up coming events</h2>
        <div class="red_line bg-danger2"></div>
        <div class="container py-3">
          <div class="row">
             include the upcoming event here 
          </div>
        </div>
        <div class="red_line mt-4 bg-danger"></div>
      </div>
    </div>
  </div>  -->
</section>


<div class="container px-5 py-5 mt-2">
  <div class="row text-center">
    <div class="col-md-8 offset-md-2">
      <h2 class="text-primary">Our Dynamic Leaders</h2>
      <p class="lead">Below are our dynamic leaders all of whom are volunteers. They're 
        very hardworking, vibrant and best of all willing to respond to your question(s), if have you 
        any. 
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card py-2">
        <div class="card-body text-center p-5">
          <img src="imgs/img-10.png" class="img-fluid rounded-circle" alt="">
          <p class="lead text-uppercase">Jane S. Doe </p>
          <p class="lead text-danger">Follow Us</p>
          <i class="bi bi-facebook text-primary "></i>
          <i class="bi bi-instagram purpleText "></i>
          <i class="bi bi-twitter text-info "></i>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card py-2">
        <div class="card-body text-center p-5">
          <img src="imgs/img-9.png" class="img-fluid rounded-circle" alt="">
          <p class="lead text-uppercase">Jane S. Doe </p>
          <p class="lead text-danger">Follow Us</p>
          <i class="bi bi-facebook text-primary "></i>
          <i class="bi bi-instagram purpleText "></i>
          <i class="bi bi-twitter text-info "></i>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card py-2">
        <div class="card-body text-center p-5">
          <img src="imgs/img-8.png" class="img-fluid rounded-circle" alt="">
          <p class="lead text-uppercase">Jane S. Doe </p>
          <p class="lead text-danger">Follow Us</p>
          <i class="bi bi-facebook text-primary"></i>
          <i class="bi bi-instagram purpleText "></i>
          <i class="bi bi-twitter text-info "></i>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include("partials/footer.php");