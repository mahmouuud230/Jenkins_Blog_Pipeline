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
        <div class="card-header bg-dark text-light">
          <span class="fs-5">Edit Category</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">
            <?php
                if(isset($_GET['ID'])){
                    $id = $_GET['ID'];
                    $sql = "SELECT * FROM categories WHERE id = '$id'";
                    $query_run = mysqli_query($con, $sql);
                    foreach($query_run as $v)
            ?>

                <form method="POST" action="category-edit_action.php">
                  <div class="row">
                    
                    <input type="hidden" name="idon" value="<?= $id ?>">
                    <div class="col-md-6 mb-3">
                      <label for="">Name</label>
                      <input type="text"value = "<?= $v['name']?>" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Slug (Url)</label>
                      <input type="text"value = "<?= $v['slug']?>" name="slug" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Description</label>
                      <textarea id="summernote" rows="4"value = "" name="description" class="form-control"><?= $v['description']?></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Meta Title</label>
                      <input type="text" max="191"value = "<?= $v['meta_title']?>" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Description</label>
                      <textarea rows="4"value = "" name="meta_description" class="form-control"><?= $v['meta_description']?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Keyword</label>
                      <textarea rows="4"value = "" name="meta_keyword" class="form-control"><?= $v['meta_keyword']?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Navbar Status</label><br>
                      <input type="checkbox" name="navbar_status" <?= $v['navbar_status'] == 1? 'checked' : '' ?> width="70px" height="70px">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Status</label><br>
                      <input type="checkbox" name="status" <?= $v['status'] == 1? 'checked' : '' ?> width="70px" height="70px">
                    </div>

                    <div class="col-md-12 mb-3">
                      <button type="submit" value = "" name="category_update" class="text-light btn btn-dark">Update Category</button>
                    </div>

                  </div>

                </form>
                    <?php }?>
            

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