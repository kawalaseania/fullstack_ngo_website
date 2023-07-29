<?php 

// if the admin clicks the login button 


if (isset($_POST["admin_login"])) {

  $email = $_POST['email']; // get the email from the form
  $password = $_POST['password']; // the password from the form

  // ------------VALIDATE USER INPUT ------------------

  // 1. check if the email is empty 
  if (empty($email)) {
    echo "<script>window.location = 'login.php?msg=The Email is required please fill it out'</script>";
    exit();
  }

  // 2. check if the email is valid  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>window.location = 'login.php?msg=The Email you provided is not valid'</script>";
    exit();
  }


  $handle = new Query();
  $check = $handle->login($email);

  if ($check->rowCount() > 0) {

    $row = $check->fetch();
    if (password_verify($password, $row['password'])) {

      session_start();
      $_SESSION['email'] = $row['email'];
      $_SESSION['fullName'] = $row['fullName'];
      $_SESSION['admin_id'] = $row['id'];

      header("Location:dashboard/index.php");
    } else {
      echo "<script>window.location = 'login.php?msg=Wrong password. Please try again'</script>";
    }
  } else {
    echo "<script>window.location = 'login.php?msg=Wrong email please try again!'</script>";
  };
}