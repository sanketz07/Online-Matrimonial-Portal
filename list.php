<!DOCTYPE html>

 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="page">
	<nav class="fh5co-nav" role="navigation" style="background-color:crimson;" data-stellar-background-ratio="0.5" >
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Wedding<strong>.com</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
				<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="story.html">Story</a></li>
						<li class="has-dropdown">
							<a href="gallery.html">Gallery</a>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="has-dropdown">
									<a href="login.html">Logout</a>
									<a href="add_profile.html">Create Profile</a>
								</li>
						
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

<div class="row">

</div>
<br><br><br>
	<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				</div>
			</div>
    <?php
                $connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection, 'wedding');
				$gender=isset($_POST['lookingfor1']) ? $_POST['lookingfor1']  : '';
				$age=isset($_POST['age1']) ? $_POST['age1']  : '';
				$community=isset($_POST['community1']) ? $_POST['community1']  : '';
				$subcommunity=isset($_POST['subcommunity1']) ? $_POST['subcommunity1']  : '';
                $query = "SELECT * FROM profile WHERE gender='$gender' OR age='$age' OR community='$community' OR subcommunity='$subcommunity'";
                $query_run = mysqli_query($connection, $query);
            ?>

            <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
			
	
		
			<div class="row container">
				<div class="col-sm-3"></div>	
				<div class="col-sm-3"><p><br><center><img class="card" src="images/<?php echo $row['image']; ?>" alt="" height="150px" width="140px"></center></p></div>
				<div class="col-sm-5"><br>
					
					<p><b>Name : </b><a href="#" style="color:crimson"><?php echo $row['name']?></a></p>
					<p><b>Age : </b><a href="#" style="color:crimson"><?php echo $row['age']?></a></p>
					<p><b>sub-community : </b><a href="#" style="color:crimson"><?php echo $row['subcommunity']?></a></p>
					<form action="details.php" method="POST">
					<p><a href="#">
					<input type="hidden" name="search" value="<?php echo $row['email']?>"></a></p>
					<p><input type="submit" class="btn btn-small" value="View More"></p>
					<hr>
					</form>
				</div>
				<div class="col-sm-1">
				
			</div>	
<!--<p class="heart text-center"><i class="icon-heart2"></i></p>-->
<?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
	
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021 . All Rights Reserved.</small>
						<small class="block">Designed by <strong>Er. Sanket Zunjakar</strong></small>
						<small class="block">Designed by <strong>Er. Ankita Sapkal</strong></small>
					
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

