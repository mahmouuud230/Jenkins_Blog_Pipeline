<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="index.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          Dashboard
        </a>
        <a class="nav-link" href="roamer.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-user fa-fw"></i>
          </div>
          Roamer
        </a>
        <a class="nav-link" href="view_registered.php">
          <div class="sb-nav-link-icon">
            <i class="fas fa-chart-area"></i>
          </div>
          Registed Users
        </a>
        <div class="sb-sidenav-menu-heading">Interface</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Category
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="category-add.php">Add Category</a>
            <a class="nav-link" href="category-view.php">View Category</a>
          </nav>
        </div>
        
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon">
            <i class="fas fa-columns"></i>
          </div>
          Posts
          <div class="sb-sidenav-collapse-arrow">
            <i class="fas fa-angle-down"></i>
          </div>
        </a>
        <div class="collapse" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="post-add.php">Add Posts</a>
            <a class="nav-link" href="post-view.php">View Posts</a>
            <a class="nav-link" href="post-deleted.php">Deleted Posts</a>
          </nav>
        </div>
        
     
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      <?= $_SESSION['auth_user']['user_name'] ?>
    </div>
  </nav>
</div>