<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');

$id = $_GET['ID'];
$sql = "SELECT p.*, c.name AS cname FROM posts p, categories c WHERE c.id = p.category_id AND p.status = '0' AND p.category_id = '$id' ORDER BY p.id DESC";
$result = mysqli_query($con, $sql);


function get_first_five_words($text) {
    $words = explode(" ", $text);
    $first_five_words = implode(" ", array_slice($words, 0, 5));
    return $first_five_words;
}

?>



  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include('message.php'); ?>

        <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <div class="row">
          
        <?php foreach($result as $data){ 
        $img = 'uploads/posts/'.$data['image'];
        ?>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="<?=$img?>" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $data['name'] ?></h5>
                <p class="card-text">
                <?= get_first_five_words($data['description']) ?>...
                </p>
                <a href="view-post.php?ID=<?=$data['id']?>" class="btn btn-primary" data-mdb-ripple-init>Read</a>
              </div>
            </div>
          
          </div>
          <?php } ?>
        </div>

      </section>
      <!--Section: Content-->

      <!-- Pagination -->

    </div>
  </main>
      </div>
    </div>
  </div>





<?php include('includes/footer.php') ?>