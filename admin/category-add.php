<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h4 class="mt-4">Users</h4>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Category</li>
  </ol>
  <?php include('../message.php'); ?>


  <div class="row mt-4">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-light" name="">
          <span class="fs-5">Add Category</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">

                <form method="POST" action="category-add_action.php">
                  <div class="row">

                    <div class="col-md-6 mb-3">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Slug (Url)</label>
                      <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Description</label>
                      <textarea id="summernote" rows="4" name="description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Meta Title</label>
                      <input type="text" max="191" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Description</label>
                      <textarea rows="4" name="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Keyword</label>
                      <textarea rows="4" name="meta_keyword" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Navbar Status</label><br>
                      <input type="checkbox" name="navbar_status" width="70px" height="70px">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Status</label><br>
                      <input type="checkbox" name="status" width="70px" height="70px">
                    </div>

                    <div class="col-md-12 mb-3">
                      <button type="submit" name="category_add" class="text-light btn btn-dark">Add Category</button>
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