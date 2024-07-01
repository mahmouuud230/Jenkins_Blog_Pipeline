<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');

$sql = "SELECT * FROM posts WHERE status = '0'";
$result = mysqli_query($con, $sql);


?>

    
<h4 class="mb-5 text-center pt-5"><strong>Latest posts</strong></h4>
    <main class="grid-gallery">
    <?php foreach($result as $data){ 
        $img = 'uploads/posts/'.$data['image'];
        ?>
      <div class="gallery-layout">
        <img src="<?= $img ?>" alt="article img" />
        </div>

      <?php } ?>
    </main>






<?php  include('includes/footer.php'); ?>