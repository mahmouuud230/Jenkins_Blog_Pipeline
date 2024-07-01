<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="#"><img height="40px" width="50px" src="assets/img/earth-svgrepo-com.svg" alt=""></a>
    <a class="navbar-brand" href="#"><h2><b>The World Travel</b></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu  bg-dark" aria-labelledby="navbarDropdown">
            <?php 
            include('admin/config/dbcon.php');
              $sql = "SELECT id, name FROM categories WHERE status = '0'";
              $result = mysqli_query($con, $sql);
              if($result){
                foreach($result as $data){
            ?>
              <li><a class="dropdown-item text-light im" href="category_articles.php?ID=<?=$data['id']?>"><?=$data['name'] ?></a></li>
                <?php }}?>
            </ul>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="aboutme.php">ABOUT</a>
          </li>


        <?php if (isset($_SESSION['auth_user'])) : ?>

          <!--<li class="nav-item dropdown">-->
          <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
          <!--    <?= $_SESSION['auth_user']['user_name'] ?>-->
          <!--  </a>-->
          <!--  <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">-->
          <!--    <li><a class="dropdown-item text-light im" href="#">My Profile</a></li>-->
          <!--    <li>-->
          <!--      <form action="logout.php" method="POST">-->
          <!--        <button name="logout_btn" type="submit" class="dropdown-item text-light im">Logout</button>-->
          <!--      </form>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
        <?php else : ?>
      <!--    <li class="nav-item">-->
      <!--      <a class="nav-link" href="login.php">Login</a>-->
      <!--    </li>-->
      <!--    <li class="nav-item">-->
      <!--      <a class="nav-link" href="register.php">Register</a>-->
      <!--    </li>-->
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>