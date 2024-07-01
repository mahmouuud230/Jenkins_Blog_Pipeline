<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

if (isset($_SESSION['auth'])) {
  if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = "You are already Logged in";
  }
  // header('location: index.php');
  exit(0);
}
?>


<div class="py-5">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <?php include('message.php') ?>
        <div class="card">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="login_action.php">
              <div class="form-group mb-3">
                <label for="">Email Id</label>
                <input required name="email" type="email" placeholder="Enter email address" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Password</label>
                <input required name="password" type="password" placeholder="Enter Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <button name="login_btn" type="submit" class="btn btn-primary">Login Now</button>
              </div>
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>


</div>






<?php include('includes/footer.php') ?>