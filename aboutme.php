<?php 
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');

$sql = "SELECT * FROM admin WHERE id = '0';";

if($sql_run = mysqli_query($con, $sql)){
foreach($sql_run as $data)
?>
<main id="main" >

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p><?= $data['description']?>.</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="uploads/posts/<?=$data['image']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Photographer</h2>
            <p class="fst-italic py-3">
             <?= $data['description'];?>
            </p>
            <div class="row text-secondary">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?= $data['name']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $data['phone']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['city']?></span></li>
                </ul>
              </div>
              <div class=" col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $data['age']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $data['degree']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $data['email']?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
             <?= $data['description']?>
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
  </main><!-- End #main -->


















<?php 
    
}else{
    $SESSION['message'] = "Page Under Maintinence";
    header('blog.php');
    exit(0);
}

include('includes/footer.php');
?>