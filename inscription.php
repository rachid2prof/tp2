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
                           Espace d'inscription 
                    </h1>
                    <div class="form-wrapp dark-transparent">
                        <div class="title-head">
                            <h3>
                                <span style="color:orange;text-decoration:underline">
                                    Remplir les champs SVP !
                                </span>
                               
                            </h3>
                        </div>
                        <form class="row" method="post">
                            <div class="col-md-6 mb30">
                                <label>
                                    Nom :
                                </label>
                                <input name="nomc" class="form-control" placeholder="Votre nom" type="text" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    Prénom :
                                </label>
                                <input name="prenomc" class="form-control" placeholder="Votre prénom" type="text" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    CIN :
                                </label>
                                <input name="cinc" class="form-control" placeholder="Votre CIN" type="text" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    Ville :
                                </label>
                                <input name="villec" class="form-control" placeholder="Ville" type="text" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    Tel :
                                </label>
                                <input name="telc" class="form-control" placeholder="votre tel" type="tel" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    Email :
                                </label>
                                <input name="emailc" class="form-control" placeholder="votre E-mail" type="email" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                   Mot de passe :
                                </label>
                                <input name="passc" class="form-control" placeholder="Mot de passe" type="password" required/>
                            </div>
                            <div class="col-md-6 mb30">
                                <label>
                                    Confirmer le mot de passe :
                                </label>
                                <input name="passc2" class="form-control" placeholder="Mot de passe" type="password" required/>
                            </div>

                            <div class="col-md-12">
                                <button name="btn" class="btn button-md button-theme animated fadeInUp btn-icon" type="submit" style="float:right;width:100%" >
                                    Créer mon compte
                                    <i class="fa fa-paper-plane">
                                    </i>
                                </button>
                            </div>
                           

                        </form>

                        <?php
if(isset($_POST['btn'])){
   
    $nomc=$_POST['nomc'];
    $prenomc=$_POST['prenomc'];
    $telc=$_POST['telc'];
    $cinc=$_POST['cinc'];
    $villec=$_POST['villec'];
    $emailc=$_POST['emailc'];
    $passc=md5($_POST['passc']);
    $passc2=md5($_POST['passc2']);
    $dt=date("Y-m-d");

 if($passc==$passc2){
    $rech=mysqli_query($conn,"select * from chercheur where emailc='$emailc'");
    
    if(mysqli_num_rows($rech)<=0){
               $ajt=mysqli_query($conn,"insert into chercheur(nomc,prenomc,cinc,telc,emailc,villec,passc,last_visit_c)values('$nomc','$prenomc','$cinc','$telc','$emailc','$villec','$passc','$dt')");
                echo "<script>window.location.href = 'login.php';</script>";
     }
    else{ 
        echo"<script>alert('Cet Email déja utilisée ! ');</script>";
     }

    }else{ echo"<script>alert('mot de passe : NON identiques ! ');</script>";  }

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
