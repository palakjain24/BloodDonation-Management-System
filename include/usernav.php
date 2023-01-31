<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light" style="display: flex; align-items: center;">
  <a class="navbar-brand" href="./index.php"><i class="fa-solid fa-hand-holding-droplet"></i>  DONATELIFE</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
    <ul class="navbar-nav form-inline my-2 my-lg-0" style="margin: 0 3rem 0 auto; gap: 2rem;">

      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="donor.php">Donors</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="user/index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?><!-- Donor Name -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="left: -6rem; top: 2.8rem;">
          
          <a class="dropdown-item" href="user/index.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

          <a class="dropdown-item" href="user/update.php">
            <i class="fa fa-edit" aria-hidden="true"></i>
            Update Profile
          </a>

          <a class="dropdown-item" href="user/logout.php">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>
        </div>
      </li>
    

    </ul>
  </div>
</nav>