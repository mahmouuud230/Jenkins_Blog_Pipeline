<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h4 class="mt-4">Users</h4>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Roamer</li>
  </ol>
  <?php include('../message.php'); ?>

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-light" name="">
          <span class="fs-5">Roamer INFO</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">
<?php 
$sql = "SELECT * FROM admin LIMIT 1";
$result = mysqli_query($con, $sql);
foreach($result as $data)
?>
                <form method="POST" action="roamer_action.php" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-6 mb-3">
                      <label for="">First Name</label>
                      <input type="text" value="<?=$data['name'] ?>" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Email Address</label>
                      <input type="email" name="email" value="<?=$data['email'] ?>" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Description</label>
                      <textarea id="summernote" rows="4" name="description" class="form-control"><?=$data['description'] ?></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Image</label>
                      <input type="hidden" name="old_image" value="<?= $data['image']?>">
                      <input type="file" max="191" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                      <button type="submit" name="roamer" class="text-light btn btn-dark">Add Admin/User</button>
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