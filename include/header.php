<!DOCTYPE html>

	<head>
		<title>Donate Life</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	</head>



<?php 
    include 'config.php';
    session_start();
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        include 'usernav.php';
    }

    else{
        include 'navigation.php';
    }
?>