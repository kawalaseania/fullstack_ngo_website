
<?php 
  $title = "Login";
  include "partials/header.php";
  include_once("partials/process_login.php");
?>

 <div class="row h-100 align-items-center">
  <div class="col-md-6 h-100" style="background-image: url('imgs/pic2.jpg');">
    <img src="" alt="">
  </div>
 <div class="col-md-6 py-4">
   <div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card py-4 shadow-sm mb-5">
        <div class="card-body pb-3  text-center">
          <?php 
            if(isset($_GET['msg'])){
              ?>
                <div class="alert alert-danger">
                  <?=$_GET['msg']?>
                </div>
              <?php 
            }
          ?>
            <h3 class="mb-3 display-4 text-primary">
            <i class="bi bi-person display-1"></i>
            </h3>
            <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Enter Your Email" class="text-center  mb-2 form-control form-control-lg">
            <input type="password" name="password" placeholder="Enter your password" class="text-center mt-3   mb-2 form-control form-control-lg">
            <div class="row">
              <div class="col-8 offset-2">
              <button class="btn btn-lg btn-primary mb w-100 mt-2" name="admin_login">
                Submit 
            </button>
              </div>
            </div>
            </form>
            <a href="#">Forget password?</a>

            
        </div>
    </div>
    </div>
   </div>
 </div>
 </div>
<?php 
include "partials/footer.php";
