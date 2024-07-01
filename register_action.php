<?php
session_start();
include('admin/config/dbcon.php');

if (isset($_POST['register_btn'])) {

  function is_password_strong($password) {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $special_chars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$special_chars || strlen($password) < 8) {
        return false;
    } else {
        return true;
    }
}


  // To protect from sql injection we use mysqli_real_escape_string();
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
  $password_hash = password_hash($password,PASSWORD_DEFAULT);
  $confirm_password_hash = password_hash($confirm_password,PASSWORD_DEFAULT);


  
  if ($password == $confirm_password) {
    if(is_password_strong($password)){
    $checkemail = "SELECT db_email FROM users WHERE db_email='$email'";
    $checkemail_run = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemail_run) > 0) {

      $_SESSION['message'] = "Email already exist";
      header("location: register.php");
      exit(0);
    } else {
      $user_query = "INSERT INTO users(db_fname, db_lname, db_email, db_password) VALUES('$fname', '$lname','$email', '$password_hash')";
      $user_query_run = mysqli_query($con, $user_query);

      if ($user_query_run) {
        $_SESSION['message'] = "Registered Successfully";
        header("location: login.php");
        exit(0);
      } else {
        $_SESSION['message'] = "Something went wrong";
        header("location: register.php");
        exit(0);
      }
    }
  }else{
    $_SESSION['message'] = "Your Password is weak";
    header("location: register.php");
    exit(0);
  }
  
  } else {
    $_SESSION['message'] = "Password and Confirm Password doesn't match";
    header("location: register.php");
    exit(0);
  }

} else {
  header('location: register.php');
  exit(0);
}
?>
