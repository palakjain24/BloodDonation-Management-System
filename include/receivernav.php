<!DOCTYPE html>
<html>
  <head>
		<title>Donate Life</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="../css/custom.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">    
    
        <!-- Fontawesome Icon JS-->
        <script defer src="../fontawesome/js/all.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	</head>

<body>
  <nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light" style="display: flex; align-items: center;">
    <a class="navbar-brand" href="./index.php"><i class="fa-solid fa-hand-holding-droplet"></i>  DONATELIFE</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      
      <ul class="navbar-nav form-inline my-2 my-lg-0" style="margin: 0 3rem 0 auto; gap: 2rem;">

        <li class="nav-item">
          <a class="nav-link" href="/dbms/Receiver/index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/dbms/Receiver/bloodBankList.php">Search</a>
        </li>

        <li class="nav-item" style="color: #e73c33">
          Receiver Name:  <?php if(isset($_SESSION['R_name'])) echo $_SESSION['R_name']; ?><!-- Donor Name -->
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../Receiver/logout.php">Logout</a>
        </li>

      </ul>
    </div>
  </nav>
</body>
</html>