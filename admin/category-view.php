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
          <span class="fs-5">View Category</span>
          <!-- <h6>Registed User</h6> -->
        </div>
        <div class="card-body">

            
                
            <div class="table-resposive">
                <table class="table table-stripe">
                    <thead style="text-align: center;">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody style="text-align: center;">

                    <?php
            $cateogry_sql = "SELECT * FROM categories WHERE status = '0'";
            $sql_run = mysqli_query($con, $cateogry_sql);

            if(mysqli_num_rows($sql_run)){

                foreach($sql_run as $items){
                    ?>
                  
                        <tr>
                            <td><?= $items['id']?></td>
                            <td><?= $items['name']?></td>
                            <td><?= $items['status'] == 1 ? "Hidden" : "Visible" ?></td>
                            <td><a class="btn btn-success" href="category-edit.php?ID=<?=$items['id']?>">Edit</a></td>
                            <form method="POST" action="delete-category.php">
                            <td><button class="btn btn-danger" value="<?= $items['id']?>" name="delete_category" type="submit">Delete</button>   </td>
                            </form>
                          </tr>
                        <?php
                }

            }else{
                ?>
                <tr>
                    <td colspan="5">No Record Found</td>
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