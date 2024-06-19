<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Creche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    </head>


    <body class="authentication-bg">
    <?php 
        session_start();
        include('connection.php');
        ?>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo-light.png" alt="" height="150" class="logo-light mx-auto">
                               <img src="assets/images/logo-dark.png" alt="" height="150" class="logo-dark mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Bienvenue sur votre espace</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Parents</h4>
                                 </div>

                                <form method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Nom Complet</label>
                                        <input class="form-control" type="text" name="nomp" id="emailaddress" required="" placeholder="Nom et Prenom">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Tel</label>
                                        <input class="form-control" type="tel" name="telp" id="emailaddress" required="" placeholder="06 66 66 66 66">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="passe" required="" id="password" placeholder="Enter your password">
                                    </div>

                                  
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" name="btn"> Valider </button>
                                    </div>

                                </form>
<?php
if(isset($_POST['btn'])){
    $nomp=$_POST['nomp'];
    $telp=$_POST['telp'];
    $email=$_POST['email'];
    $passe=$_POST['passe'];
    $passe=$passe;
    $rech=mysqli_query($conn,"select * from parents where emailp='$email'");
    
    if(mysqli_num_rows($rech)<=0){
               $ajt=mysqli_query($conn,"insert into parents(nomp,telp,emailp,passep)values('$nomp','$telp','$email','$passe')");
               echo"<script>alert('Dés que la direction confirme votre compte, veillez patienter SVP');</script>";
               echo "<script>window.location.href = 'index.php';</script>";
     }
    else{ 
        echo"<script>alert('Cet E-mail déja utilisée! pour plus d informations, contactez la direction');</script>";
     }
}
?>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Accéder au compte? <a href="login.php" class="text-dark ml-1"><b>Login</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>