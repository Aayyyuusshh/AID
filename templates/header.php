<div class="container" id="top">
  <div class="row">
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <div class="col-lg-2">
        <a class="navbar-brand" href="<?= isset($_SESSION['userid']) ? 'dashboard.php' : 'index.php'; ?>"> 
          <?= isset($_SESSION['userid']) ? 'ElectroNepal' : 'ElectroNepal';?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
        </div>

        <div class="w-100 collapse navbar-collapse offset-lg-6" id="navbarNav">
          <ul class="navbar-nav">
            <?php if (isset($_SESSION['userid'])) { ?> 
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="fa fa-home">&nbsp;</i>Home </a>
            </li>
            <?php } ?>
            <li class="nav-item active">
              <a class="nav-link" href="about.php"></i>About Us </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="contact.php"></i>Contact Us </a>
            </li>
            <?php
            if (!isset($_SESSION["userid"])) {
              ?>
              <li class="nav-item active">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
              <?php
            }
            ?>

            <?php
            if (isset($_SESSION["userid"])) {
              ?>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php"></i>Logout</a>
              </li>
              <?php
            }
            ?>
            <li class="nav-item active">
              <a href="search_google.php" class="nav-link">
                <i class="fa fa-search"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>

