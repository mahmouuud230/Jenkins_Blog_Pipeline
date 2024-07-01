<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');

$sql = "SELECT p.*, c.name AS cname FROM posts p, categories c WHERE c.id = p.category_id AND p.status = '0'";
$result = mysqli_query($con, $sql);


?>

    
    <header>
      <h1>Globe Roamer</h1>
    </header>

    <main class="grid-container">
    <?php foreach($result as $data){ 
        $img = 'uploads/posts/'.$data['image'];
        ?>
      <article>
        <img class="px-1" src="<?= $img ?>" alt="article img" />
        <div class="px-1">
        <div class="px-1 pt-2 text-primary"><?= $data['cname'] ?></div>
          <a href="view-post.php?ID=<?= $data['id']?>"><h3 class="text-dark"><?= $data['name'] ?></h3></a>
          <p><?= $data['description'] ?></p>
        </div>
      </article>

      <?php } ?>
    </main>






<?php  include('includes/footer.php'); ?>