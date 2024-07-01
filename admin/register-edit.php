<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
  <?php include('../message.php'); ?>
  <h4 class="mt-4">Users</h4>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
  </ol>

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-light" >
          <span class="fs-5">Edit User</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">


          <?php

          if (isset($_GET['ID'])) {
            $user_id = $_GET['ID'];
            $users = "SELECT * FROM users WHERE db_id = '$user_id'";
            $users_run = mysqli_query($con, $users);

            if (mysqli_num_rows($users_run) > 0) {

              foreach ($users_run as $user) {
          ?>

                <form method="POST" action="register-edit_action.php">
                  <input name="id" type="hidden" value="<?= $user['db_id']; ?>">
                  <div class="row">

                    <div class="col-md-6 mb-3">
                      <label for="">First Name</label>
                      <input type="text" name="fname" value="<?= $user['db_fname']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Last Name</label>
                      <input type="text" name="lname" value="<?= $user['db_lname']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Email Address</label>
                      <input type="email" name="email" value="<?= $user['db_email']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Password</label>
                      <input type="text" name="password" value="<?= $user['db_password']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Role as</label>
                      <select class="form-control" name="role_as" id="">
                        <option value="">--Select Role--</option>
                        <option value="1" <?= $user['role_as'] == 1 ? 'selected' : '' ?>>Admin</option>
                        <option value="0" <?= $user['role_as'] == 0 ? 'selected' : '' ?>>User</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Status</label><br>
                      <input type="checkbox" name="db_status" <?= $user['db_status'] == 1 ? 'checked' : '' ?> width="70px" height="70px">
                    </div>

                    <div class="col-md-12 mb-3">
                      <button type="submit" name="update_btn" class="text-light btn btn-dark">Update User</button>
                    </div>

                  </div>

                </form>

              <?php
              }
            } else {
              ?>
              <h4>No Record Found</h4>
          <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->

<?php
include('includes/footer.php');
include('includes/script.php');
?>