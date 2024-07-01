<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

if (isset($_SESSION['auth'])) {
  $_SESSION['message'] = "You are already Registered";
  // header('location: index.php');
  exit(0);
}
?>



<form method="POST" action="register_action.php">

  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <?php include('message.php'); ?>
          <div class="card">
            <div class="card-header">
              <h4>Register</h4>
            </div>
            <div class="card-body">
              <div class="form-group mb-3">
                <label for="">First Name</label>
                <input required name="fname" type="text" placeholder="Enter First Name" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Last Name</label>
                <input required name="lname" type="text" placeholder="Enter Last Name" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Email Id</label>
                <input required name="email" type="email" placeholder="Enter email address" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Password</label>
                <input required name="password" type="password" placeholder="Enter Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Confirm Password</label>
                <input required name="cpassword" type="password" placeholder="Confirm Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <button name="register_btn" type="submit" class="btn btn-primary">Register</button>
              </div>
            </div>
          </div>
</form>

</div>
</div>
</div>


</div>






<?php include('includes/footer.php') ?>