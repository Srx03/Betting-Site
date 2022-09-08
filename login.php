
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Betsb - Sports Betting HTML Template</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">


    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">


    <!-- Main css -->
    <link href="assets/css/main.css" rel="stylesheet">

   

</head>
<body>

	
<?php 
$conn= mysqli_connect("127.0.0.1:3302","root","","srxbet");
if(isset($_POST['submit'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
  
    $sql = mysqli_query($conn, "SELECT count(*) as total from korisnici where username='".$uname."'AND password='".$password."'");
    
	$rw=mysqli_fetch_array($sql);
	
    
	if($rw['total'] > 0)
	{
	echo "<script>alert('Uspjesno logovanje')</script>";
	echo "<script>window.location.href = 'index2.php';</script>";
		
	}
	else
	{
		echo "<script>alert('Pogresna sifra ili nalog')</script>";
		
	}
    
        
}


?>


    <!-- Preloader -->
	<div class="preloader">
		<div class="spinner">
		   <span class="spinner-rotate"></span>
		</div>
	</div><!-- /Preloader -->
  
    <!--Header Area-->
    <header class="header-area gradient-bg">
        <nav class="navbar navbar-expand-lg main-menu">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">   
                        <li class="nav-item"><a class="nav-link" href="index.php">Pocetna</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">O nama</a></li>
                       <li class="nav-item"><a class="nav-link" href="blog.php">Novosti</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php">Registracija</a></li>
						<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                    <div class="header-btn justify-content-end">
                        <a href="register.php" class="bttn-small btn-fill"><i class="fa fa-key"></i>Signup</a>
                        <a href="login.php" class="bttn-small btn-fill ml-2"><i class="fa fa-lock"></i>Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header><!--/Header Area-->

    <section>
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-md-7">
                    <div class="content-center cl-white">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="account-form">
                                    <div class="title">
                                        <h3>Loguj se</h3>
										<br>
                                    </div>
                                    <form action="login.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Username" name="username" id="username" required>
												<br>	
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="password" placeholder="Password" name="password" id="password" required>
												<br>											
                                            </div>
                                            
                                            <div class="col-xl-6">
                                                <button type="submit" class="bttn-small btn-fill w-100" name="submit">Loguj se</button>
												<br>
                                            </div>
                                           <br>
                                            <div class="col-xl-6">
                                                <a href="register.php" class="bttn-small btn-fill w-100" name="submit2"><center>Napravi novi nalog</center></a>
                                            </div>
											
											
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                     
                </div>-->
            </div>
        </div>
    </section>

    <!--Copyright Area-->
    <footer class="footer-area section-padding-2 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socijalne mreže</h3>
                        <p>Posjeti nas i na </p>
                        <div class="social">
                            <a href="https://www.facebook.com/srdjan.djuric.946" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/d_srxx/" class="cl-instagram"><i class="fa fa-instagram"></i></a>
							<a href="https://www.google.com/maps/place/Elektrotehni%C4%8Dka+%C5%A1kola+Tuzla/@44.5404577,18.6645823,15z/data=!4m2!3m1!1s0x0:0xee6994f96836c5bb?sa=X&ved=2ahUKEwiWxez67MHwAhXniIsKHY4qBzcQ_BIwIXoECCkQBQ" class="cl-location"><i class="fa fa-map-marker"></i></a>
  
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget footer-nav">
                                <h3>Kontakt</h3>
                                <ul>
                                    <li><a href="tel:062-586-276">Pozovi</a></li>
                                    <li><a href = "mailto: srdjan.djuric003@gmail.com">Posalji mail</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget footer-nav">
                                <h3>Ostale poveznice</h3>
                                <ul>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Registracija</a></li>
                                    <li><a href="about.php"></a>O nama</li>
                                    <li><a href="blog.php">Novosti</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer-insta portfolio-gallery">
                        <h3>Admini</h3>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="assets/images/commenter1.png" class="thumb popup-gallery"><img src="assets/images/commenter1.png" alt=""></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="assets/images/commenter2.png" class="thumb popup-gallery"><img src="assets/images/commenter2.png" alt=""></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <a href="assets/images/commenter3.png" class="thumb popup-gallery"><img src="assets/images/commenter3.png" alt=""></a>
                            </div>
                           
                        </div>
                    </div>
                </div
            </div>
        </div>
    </footer><!--/Copyright Area-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>

    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/jquery.accrue.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>