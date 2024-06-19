<!DOCTYPE html>
<html class="no-js" lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clemira Real Responsive Estate is a premium HTML5 template, is a perfect choice for your real estate website. because of its clean, modern, 100% responsive & W3C HTML validate coding, and awesome design especially made for real estate agents, companies, directory sites, brokerages, apartment managers, residential & commercial developers, vacation rentals, condominium, corporate, agency owners, personal or standalone Real estate agents and much more.">
    <meta name="author" content="mardianto">
    <meta name="google-site-verification" content="y1scjlPjnMwn167QNwtbzqpA3VxqGrb4rx3XU9rOoIY" />

    <title>
    
    Welcome 
    
    </title>
    <!-- start css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootsnav.min.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- Color -->
    <link rel="stylesheet" type="text/css" id="skin"  href="assets/css/themes/default.css">

     <!-- google font  -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,800" >
     
</head>

<body>
     <div class="spinner-wrapper">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
        <p>Please wait ....</p>
    </div>

    <!-- Option Panel -->
    <div class="option-panel option-panel-collased">
        <h2>Change Color</h2>
        <div class="color-plate default-plate" data-color="default"></div>
        <div class="color-plate green-plate" data-color="green"></div>
        <div class="color-plate blue-plate" data-color="blue"></div>
        <div class="color-plate yellow-plate" data-color="yellow"></div>
        <div class="color-plate red-plate" data-color="red"></div>
        <div class="color-plate green-light-plate" data-color="green-light"></div>
        
        <div class="color-plate yellow-light-plate" data-color="yellow-light"></div>
        <div class="color-plate green-light-2-plate" data-color="green-light-2"></div>
        <div class="color-plate olive-plate" data-color="olive"></div>
        <div class="color-plate orange-plate" data-color="orange"></div>
        <div class="color-plate blue-light-plate" data-color="blue-light"></div>
        <div class="color-plate brown-plate" data-color="brown"></div>
        <div class="setting-button">
            <i class="fa fa-gear fa-spin"></i>
        </div>
    </div>
    <!-- /Option Panel -->

    
<!-- Start Navigation -->
<?php 
  session_start();
  include('connection.php'); 
  ?>

<?php include('header.php'); ?>


<div class="clearfix">
</div>


        
	<!--==========================================
=            Section paralax      =
===========================================-->
<div class="parallax paddingbot-clear" data-background="assets/images/bg.jpg" data-size="50%" data-speed="0.5" id="home">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="content-parallax">
            <div class="row">
                <div class="col-md-12 col-sm-7 wow fadeInLeft delay-07s">
                    <h1 style="text-align:center">                      
                           Espace d'authentification 
                    </h1>
                    <div class="form-wrapp dark-transparent">
                        <div class="title-head">
                            <h3>
                                <span style="color:#E6610A;text-decoration:underline">
                                    Vous êtes les Bienvenues !
                                </span>
                               
                            </h3>
                        </div>
                        <form class="row" method="post">
                             
                            
                             
                            <div class="col-md-6 mb30">
                                <label>
                                    Email :
                                </label>
                                <input name="emailc" class="form-control" placeholder="votre E-mail" type="email"/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                   Mot de passe :
                                </label>
                                <input name="passc" class="form-control" placeholder="Mot de passe" type="password"/>
                            </div>
                             

                            <div class="col-md-12">
                                <button name="btn" class="btn button-md button-theme animated fadeInUp btn-icon" type="submit" style="float:right;width:100%" >
                                    Se connecter
                                    <i class="fa fa-paper-plane"> </i>
                                </button>
                            </div>

                            <div class="col-md-12">
                                 <h5 style="padding-top:10px;text-decoration:underline #E6610A"> <i class="fa fa-user"  style="color:#E6610A"> </i> <a href="inscription.php">Créer mon compte </a> </h5>
                            </div> 
                           
                        </form>

                        <?php
if(isset($_POST['btn'])){
    $emailc= mysqli_real_escape_string($conn, $_POST['emailc']);
    $passc= mysqli_real_escape_string($conn, $_POST['passc']);

 
    $passc=md5($_POST['passc']);
    
    $dt=date("Y-m-d");

    $rech=mysqli_query($conn,"select * from chercheur where emailc='$emailc' and passc='$passc'");
    
    if(mysqli_num_rows($rech)<=0){
                echo"<script>alert('Vérifiez les données [Email / mot de passe]');</script>";
     }
    else{ 
 
        $data=mysqli_fetch_assoc($rech);
        $_SESSION["idc"]=$data["idc"];
        $_SESSION["nomc"]=$data["nomc"];
      
      
        //maj last visit
        $idc=$_SESSION["idc"];
        $enlign=mysqli_query($conn,"update chercheur set last_visit_c='$dt' where idc=$idc");

        echo "<script>window.location.href = 'index.php';</script>";

     }
}
?>

                    </div>
                </div>




                
              

                            

                
            </div>
        </div>
    </div>
</div>

<!-- End parallax -->
<div class="clearfix">
</div>




  
<?php include('footer.php'); ?>
    
    
    <!--====  End of Section footer  ====-->
    
 
   

    
     <!-- START JAVASCRIPT -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/owl.caraousel.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/shuffleLetters.js"></script>
 
    
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
    <script src="#" async defer></script>
    
</body>

</html>
