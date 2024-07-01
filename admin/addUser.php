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
        <div class="card-header bg-dark text-light" name="">
          <span class="fs-5">Add Admin/User</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">

                <form method="POST" action="addUser_action.php">
                  <div class="row">

                    <div class="col-md-6 mb-3">
                      <label for="">First Name</label>
                      <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Last Name</label>
                      <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Email Address</label>
                      <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Password</label>
                      <input type="text" name="password" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Role as</label>
                      <select class="form-control" name="role_as" id="">
                        <option value="">--Select Role--</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Status</label><br>
                      <input type="checkbox" name="db_status" width="70px" height="70px">
                    </div>

                    <div class="col-md-12 mb-3">
                      <button type="submit" name="add_user" class="text-light btn btn-dark">Add Admin/User</button>
                    </div>

                  </div>

                </form>

            

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