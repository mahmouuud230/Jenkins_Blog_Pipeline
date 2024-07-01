<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h4 class="mt-4">Users</h4>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Post</li>
  </ol>
  <?php include('../message.php'); ?>


  <div class="row mt-4">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-light" name="">
          <span class="fs-5">Edit Post</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">


                <?php
                if(isset($_GET['ID'])){
                    $id = $_GET['ID'];
                    $post_query = "SELECT p.*, c.id AS cid FROM posts p, categories c WHERE c.id = p.category_id AND p.id = '$id'";
                    $post_run = mysqli_query($con, $post_query);
                    foreach($post_run as $data){
               
                ?>

                <form method="POST" action="post-edit_action.php" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-12 mb-3">
                    <label for="">Select Category</label>
                      <select required name="category_id" class="form-control">
                        <option value="">-- Select Category</option>
                        <?php 
                        $sql = "SELECT * FROM categories WHERE status = '0'";
                        $query_run = mysqli_query($con, $sql);
                      
                        if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $row){
                                    ?>
                                    <option <?= $row['id'] == $data['cid']? 'selected' :'' ?> value="<?= $row['id']?>"><?= $row['name']?></option>
                                    <?php
                                }
                        }else{
                            ?>
                            <h5>No Categories Found</h5>
                            <?php
                        }
                        ?>
                        
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Name</label>
                      <input type="text" value="<?= $data['name']?>" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Slug (Url)</label>
                      <input type="text" value="<?= $data['slug']?>" name="slug" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Description</label>
                      <textarea rows="4" id="summernote" name="description" value="" class="form-control"><?= $data['description']?></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Meta Title</label>
                      <input type="text" value="<?= $data['meta_title']?>" max="191" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Description</label>
                      <textarea rows="4" name="meta_description" value="" class="form-control"><?= $data['meta_description']?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Keyword</label>
                      <textarea rows="4" name="meta_keyword" value="" class="form-control"><?= $data['meta_keyword']?></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                    <input type="hidden" max="191" name="old_image" value=<?= $data['image']?> class="form-control">
                      <label for="">Image</label>
                      <input type="file" name="image" class="form-control">
                      <!-- max="191" -->
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="db_status">Status</label><br>
                      <input type="checkbox" name="status" <?= $data['status'] == '1'? 'checked': ''?> width="70px" height="70px">
                    </div>

                    <div class="col-md-12 mb-3">
                      <button type="submit" value="<?= $id ?>" name="post_edit" class="text-light btn btn-dark">Edit Post</button>
                    </div>

                  </div>

                </form>

                <?php 
                
           }}else{
                ?>
                <h4></h4>
                <?php
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