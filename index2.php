<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>SrxBet - Ko igra taj i dobija!!!</title>

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
<?php //citanje iz baze
$conn= mysqli_connect("127.0.0.1:3302","root","","srxbet");
   $sql1="SELECT * FROM ponuda where sportovi1='fudbal'";
   $sql2="SELECT * FROM ponuda where sportovi1='kosarka'";
   $sql3="SELECT * FROM ponuda where sportovi1='tenis'";
   $sql4="SELECT * FROM ponuda where sportovi1='rukomet'";
    $result1=mysqli_query($conn,$sql1);
	$result2=mysqli_query($conn,$sql2);
	$result3=mysqli_query($conn,$sql3);
	$result4=mysqli_query($conn,$sql4);
	$resultcheck1=mysqli_num_rows($result1);
	$resultcheck2=mysqli_num_rows($result2);
	$resultcheck3=mysqli_num_rows($result3);
	$resultcheck4=mysqli_num_rows($result4);
?>

<?php //tiket
if(isset($_POST['uplati'])){
	$vrijeme=date('d-m-y h:i:s');
	$uplata= $_POST['value'];
	$kvota= $_POST['total'];
	$dobitak= $_POST['sum-total'];
	
	$sql_ticket = "INSERT INTO listic (vrijeme, uplata, ukupna_kvota, dobitak) VALUES ('$vrijeme','$uplata','$kvota','$dobitak')";
			
			if(mysqli_query($conn, $sql_ticket))
			{
				echo "<script>alert('Uspjesno odigran listic')</script>";
				echo "<script>window.location = window.location.pathname;</script>";
				exit();
				
			}
			else
			{
				echo "<script>alert('Greska pri izvršavanju, pokušajte ponovno')</script>";
			}
	
	}

?>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </div>
    <!-- /Preloader -->

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
						<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    </ul>
                    <div class="header-btn justify-content-end">
                        <a href="register.php" class="bttn-small btn-fill"><i class="fa fa-key"></i>Signup</a>
                        <a href="login.php" class="bttn-small btn-fill ml-2"><i class="fa fa-lock"></i>Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/Header Area-->

    <!--Full Search-->
    <div class="search-full">
        <button type="submit" class="search-close"><i class="flaticon-cancel"></i></button>
        <div class="search-full--inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10">
                        <form class="main-search-form">
                            <input type="search" name="main_search" id="main_search" placeholder="Search anything">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Full Search-->

    <section>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-xl-8">
                    <div class="main-content-slider owl-carousel">
                        <div class="single-slider" style="background: url('assets/images/banner/hero-2.jpg') no-repeat center / cover;">
                            <div class="row">
                                <div class="col-xl-6">
                                    <h3>Top ponuda</h3>
                                    <p>30% promo kodovi uskoro!!!</p>

                                    <div class="hero-score">Svaki dobitak veći za <span>30%</span></div>
                                    <div class="hero-score">Svaki odigrani listic <span>30%</span></div>
                                    <div class="hero-score">122+ Utakmice u 4 sporta</div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider" style="background: url('assets/images/banner/hero-1.jpg') no-repeat center / cover;">
                            <div class="row">
                               <div class="col-xl-6">
                                    <h3>Top ponuda</h3>
                                    <p>30% promo kodovi uskoro!!!</p>

                                    <div class="hero-score">Svaki dobitak veći za <span>30%</span></div>
                                    <div class="hero-score">Svaki odigrani listic <span>30%</span></div>
                                    <div class="hero-score">122+ Utakmice u 4 sporta</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="game-box">
                        <div class="card">
                            <div class="card-header">
                                <h3>Ponuda</h3>
                                
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">fudbal</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">kosaraka</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">tenis</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">rukomet</a>
                                    </li>
                                  </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped"> <!--fudbal -->
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Vrijeme</th>
                                                        <th scope="col">Utakmica</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">X</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">Fudbalkvota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
												if($resultcheck1 > 0){
													while($row =mysqli_fetch_assoc($result1)) {
												
												
												
												?>
                                                    <tr>
                                                        <td><?php echo $row['vrijeme'];?></td>
                                                       
                                                        <td>
                                                            <strong><?php echo $row['utakmica'];?></strong>
                                                            
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['domacin'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['remi'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['gost'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['fudbalkvota'];?></a>
                                                        </td>

                                                    </tr>
                                                  <?php
													}
												
													}
													else{
													echo 'Danas nema fudbalskih utakmica';
													}													
												  ?>
												   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                    <tr>
                                                         <th scope="col">Vrijeme</th>
                                                        <th scope="col">Utakmica</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">X</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">Kosarkakvota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
												if($resultcheck2 > 0){
													while($row =mysqli_fetch_assoc($result2)) {
												
												
												
												?>
                                                    <tr>
                                                        <td><?php echo $row['vrijeme'];?></td>
                                                       
                                                        <td>
                                                            <strong><?php echo $row['utakmica'];?></strong>
                                                            
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['domacin'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['remi'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['gost'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['kosarkakvota'];?></a>
                                                        </td>

                                                    </tr>
                                                  <?php
													}
												
													}
													else{
													echo 'Danas nema kosarkaskih utakmica';
													}
														
												  ?>
												   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="table-responsive">
                                             <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Vrijeme</th>
                                                        <th scope="col">Utakmica</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">X</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">Teniskvota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
												if($resultcheck3 > 0){
													while($row =mysqli_fetch_assoc($result3)) {
												
												
												
												?>
                                                    <tr>
                                                        <td><?php echo $row['vrijeme'];?></td>
                                                       
                                                        <td>
                                                            <strong><?php echo $row['utakmica'];?></strong>
                                                            
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['domacin'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['remi'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['gost'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['teniskvota'];?></a>
                                                        </td>

                                                    </tr>
                                                  <?php
													}
												
													}
													else{
													echo 'Danas nema teniskih utakmica';
													}													
												  ?>
												   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
									<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                                        <div class="table-responsive">
                                             <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Vrijeme</th>
                                                        <th scope="col">Utakmica</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">X</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">Rukometkvota</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php 
												if($resultcheck4 > 0){
													while($row =mysqli_fetch_assoc($result4)) {
												
												
												
												?>
                                                    <tr>
                                                        <td><?php echo $row['vrijeme'];?></td>
                                                       
                                                        <td>
                                                            <strong><?php echo $row['utakmica'];?></strong>
                                                            
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['domacin'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['remi'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['gost'];?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btnn"><?php echo $row['rukometkvota'];?></a>
                                                        </td>

                                                    </tr>
                                                  <?php
													}
												
													}
													else{
													echo 'Danas nema rukometnih utakmica';
													}													
												  ?>
												   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    
                    <div id="ticket-total" class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>Vaš listić</h3>
                            <!-- ovdje cu dodat da se prikaze listic -->
                        </div>
					<form action="index2.php" method="post">	
                        <div class="widget-body">
                            <div class="ticket-list">

                            </div>
                            <p><b>Total:</b>
                                <span class="ticket-total-price">0.00</span>
                            </p>
                        </div>
						<div class="row">
							<div class="col-md-6">
							   <input type="text" placeholder="Unesite" class="form-ticket-user-price" name="value" style="width: 100%;padding: 8px;margin-left: 18px;">
							   <input type="hidden" placeholder="" class="form-ticket-total" value="" name="total">
								<input type="hidden" placeholder="" class="form-sum-total" value="" name="sum-total">
							</div>
					
							<div class="col-md-6">
								<button type="submit" class="bttn-small btn-fill w-70" name="uplati">Uplati</button>
							</div>
						</div>
						 
						<br>
                    </div>
					
                 </form>   
                </div>
            </div>

        </div>

    </section>


    <!--Footer Area
    

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

    <script src="assets/js/script.js"></script>
    <script src="assets/js/ticket-calculation.js"></script>

    <style>

    </style>
</body>

</html>