<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>BOOKSAVANIA</title>-->
	  <title><?php echo $title; ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="bootstrap/img/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="bootstrap/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="bootstrap/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="carousel.css" rel="stylesheet">

    <!-- Open Sans for body font -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
 
  </head>


<body>
  <!-- Start Header -->
  <header id="mu-header" class="" role="banner">
		<div class="container-fluid">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Booksavania</a>

				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
                  <!-- link to create_acc.php-->
                  <!--  <li><a href="create_acc.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Create account</a></li> -->
                  <!-- link to admin.php -->
                    <li><a href="admin.php"><span class="glyphicon glyphicon-piggy-bank"></span>&nbsp; Sell</a></li>
					        <!-- link to books.php -->
                    <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
				          <!-- link to contacts.php -->
              		  <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp; Contact Us</a></li>
				          <!-- link to shopping cart -->
              		  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			<!--</nav>-->
		</div>
	</header>
  <!-- End Header -->

  <?php
      if(isset($title) && $title == "Index") {
  ?>
        <!-- Hero Start -->
       <div class ="jumbotron">
          <div class="container">
            
            <h1>Welcome to BOOKSAVANIA</h1>
                <p>This website is created to promote re-use of books</p>
            
          </div>
      </div> 
        
        <!-- Hero end -->

  <?php 
    } 
  ?>