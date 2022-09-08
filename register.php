
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
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
            </div>
        </nav>
    </header><!--/Header Area-->

    <section>
        <d iv class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                   
                </div>
                <div class="col-md-6">
                    <div class="content-center cl-white">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="account-form">
                                    <div class="title">
                                        <h3>Kreiraj nalog!</h3>  
                                    <form action="register.php" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="Ime" name="ime" id="ime" required>
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="Prezime" name="prezime" id="prezime" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Broj telefona" name="brojtelefona" id="brojtelefona" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="email" placeholder="Email" name="email" id="email" required>
												
                                            </div>
                                            <div class="col-xl-12">
                                               <input type="text" placeholder="Username" name="username" id="username" required>
										
                                            </div>	
											<div class="col-xl-12">
                                                 <input type="password" placeholder="Password" name="password" id="password" required>
                                            </div>											
                                            <div class="col-xl-12">
                                              
                                            </div>
                                            <div class="col-xl-12">
                                                <button  type="submit"  class="bttn-small btn-fill w-100" name="register" id="register" >Napravi nalog</button>
                                            </div>
                                            <div class="col-xl-12">
                                                <p><a href="login.php">Već posjedujete nalog?</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <div class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>Betsb info</h3>
                        </div>
                        <div class="widget-body">
                            <p><strong>Register:</strong> SMS 'JOIN' to 26587</p>
                            <p><strong>Customer care:</strong> 987654123</p>
                            <p><strong>Customer care 2:</strong> 987654123</p>
                            <p><strong>Email:</strong> info@betsb.com</p>
                        </div>
                    </div>
                    <div class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>Betsb ads</h3>
                        </div>
                        <div class="widget-body p-0">
                            <a href=""><img class="w-100" src="assets/images/ads.jpg" alt=""></a>
                        </div>
                    </div>                 
                </div>-->
            </div>
        </div>
    </section>

    <!--Copyright Area-->
     <<footer class="footer-area section-padding-2 gradient-bg">
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
    </footer>
<!--/Copyright Area-->



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
	
<script>
$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var ime 				= $('#ime').val();
			var prezime				= $('#prezime').val();
			var brojtelefona 		= $('#brojtelefona').val();
			var email 				= $('#email').val();
			var password 			= $('#password').val();
			var username 			= $('#username').val();
			

				e.preventDefault();	 

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {ime: ime,prezime: prezime,brojtelefona: brojtelefona,email: email,password: password,username: username},
					success: function(data){
					Swal.fire({
								'title': 'Srxbet',
								'text': data,
								'type': 'success'
								
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Srxbet',
								'text': 'Poblem prilikom cuvanja podataka.',
								'type': 'error'
								})
					}
				});

				
			}

			



		});		

		
	});
	
</script>


</body>
</html>