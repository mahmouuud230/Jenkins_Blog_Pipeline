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
          <span class="fs-5">View Post</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">

            
                
            <div class="table-resposive">
                <table class="table table-stripe">
                    <thead style="text-align: center;">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody style="text-align: center;">

                    <?php
            $post_sql = "SELECT p.*, c.name AS cname
FROM posts p
JOIN categories c ON c.id = p.category_id
WHERE p.status = '0'
ORDER BY p.id ASC";
            $sql_run = mysqli_query($con, $post_sql);

            if(mysqli_num_rows($sql_run)){

                foreach($sql_run as $items){
                    
                    $cat_id = $items['category_id'];
                    $cat = mysqli_query($con,"SELECT name FROM categories WHERE id = '$cat_id'");
                    foreach($cat as $cat)
                    $values = array(
                    "id" => $items['id'],
                    "image" => $items['image']
                    );
                    $values = json_encode($values);
                    ?>
                  
                        <tr>
                            <td><?= $items['id']?></td>
                            <td><?= $items['name']?></td>
                            <td><?= $items['cname'] ?></td>
                            <td><img height="50px" width="60px" src="../uploads/posts/<?= $items['image']?>" alt=""></td>
                            <td><?= $items['status'] == 1 ? "Hidden" : "Visible" ?></td>
                            <td><a class="btn btn-success" href="post-edit.php?ID=<?=$items['id']?>">Edit</a></td>
                            <form method="POST" action="delete-post.php">
                            <td><button class="btn btn-danger" value= <?= $values ?> name="delete_post" type="submit">Delete</button>   </td>
                            </form>
                          </tr>
                        <?php
                }

            }else{
                ?>
                <tr>
                    <td colspan="7">No Record Found</td>
                </tr>
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
</div>
<!-- </div> -->

<?php
include('includes/footer.php');
include('includes/script.php');
?>