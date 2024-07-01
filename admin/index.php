<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">


  <h1 class="mt-4">Admin Panel</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
  </ol>
  <?php include('message.php'); ?>

  <div class="row">
  <div class="col-xl-3 col-md-6">
      <div class="card bg-primary text-white mb-4">
        <div class="card-body">Total Categories
          <?php 
            $category_query = "SELECT * FROM categories";
            $query_run = mysqli_query($con, $category_query);
            if($query_run){
              $category_total = mysqli_num_rows($query_run);
              echo'<h4 class="mb-0">'.$category_total.'</h4>';
            }else{

            }
          ?>
        
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="category-view.php">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-primary text-white mb-4">
        <div class="card-body">Total Posts
        <h4 class="mb-0">2</h4>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="post-view.php">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-primary text-white mb-4">
        <div class="card-body">Total Users
        <h4 class="mb-0">2</h4>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="view_registered.php">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-danger text-white mb-4">
        <div class="card-body">Total Deleted Posts
        <h4 class="mb-0">2</h4>
        </div>
        
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="post-deleted.php">View Details</a>
          <div class="small text-white">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>