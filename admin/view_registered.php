<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h4 class="mt-4">Users</h4>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
  </ol>

  <div class="row">

    <div class="col-md-12">
      <?php include('message.php');?>
      <div class="card">
        <div class="card-header bg-dark text-light">
          <span class="fs-5">Registed User</span>
          <a class="float-end btn btn-primary" href="addUser.php">Add Admin</a>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">
          <table class="table table-bordred">
            <thead style="text-align: center;">

              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Edit</th>
              <th>Delete</th>

            </thead>
            <tbody style="text-align: center;">

              <?php
              $query = "SELECT * FROM users WHERE deleted = 0";
              $result = mysqli_query($con, $query);
              if (mysqli_num_rows($result) > 0) {
                foreach ($result as $row) {
              ?>
                  <tr>
                    <td> <?= $row['db_id'] ?></td>
                    <td> <?= $row['db_fname'] . ' ' . $row['db_lname'] ?></td>
                    <td> <?= $row['db_email'] ?></td>
                    <td>

                      <?php
                      if ($row['role_as'] == 1)
                        echo "Admin";
                      else
                        echo "User";

                      ?>

                    </td>
                    <td> <a class="btn btn-success" href="register-edit.php?ID=<?= $row['db_id'] ?>">Edit</a></td>
                    <form method="POST" action="delete_registered.php">
                    <td> <button name="delete_btn" type="submit" value="<?= $row['db_id'] ?>" class="btn btn-danger">Delete</button></td>
                    </form>
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr colspan="6">No Record Found</tr>
              <?php

              }


              ?>



            </tbody>
          </table>
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