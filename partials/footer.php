<section class="bg-dark py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4 class="text-white">Contact Info</h4>
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="bi bi-geo-alt"></i> Gbarnga City, Bong Co.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="bi bi-phone"></i> +231 775577736</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="bi bi-envelope-paper-fill"></i> uwsd@gmail.com </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">About UWSD</h4>
        <p class="text-white">is a women initiated, managed and 
          children development voluntary organization working in the 
          remotes zone of Bong County. With the initiative of some self-motived energetic women 
          social worker, it was established to support women and farmers</p>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">Photo Galary</h4>
        <div class="row col-equal-height g-0">
        <?php 
        $obj = new Query();
        $pic = $obj->load_few_images();
        while($row = $pic->fetch()){
          ?>
          <div class="col-md-4 col-6 ">
            <img class="img-fluid rounded img-thumbnail mt-2 h-100"  src="uploads/<?=$row['pic']?>" alt="">
          </div>
          <?php 
        }
        ?>
        </div>
      </div>
      <div class="col-md-3">
        <h4 class="text-white">Newsletter</h4>
        <form action="subscribe.php" method="post">
          <input type="email" class="form-control form-control-lg rounded-0" placeholder="Email Address">
          <button class="rounded-0 mt-3 mb-4 btn btn-danger">SUBSCRIBE</button>
        </form>
          <h3><i class="bi text-white bi-facebook"></i>
          <i class="bi text-white bi-whatsapp"></i>
          <i class="bi text-white bi-linkedin"></i>
          <i class="bi text-white bi-youtube"></i>
          </h3>
      </div>
      <div class="col-md-8 offset-md-2 text-center">
      <hr class="mt-3  bg-white">
      <p class="text-white"> <small>copy &copy 2013 by Tarnue P. Borbor, All right Reserved</small> <br> 
      <a href="login.php" class="text-warning">Login</a></p>
      </div>
    </div>
  </div>
</section>


<script>
  $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 3,
    margin: 10,
    loop: true,
    nav: true
  });
});

</script>
</body>
</html>
