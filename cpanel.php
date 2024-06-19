<!DOCTYPE html>
 <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title> Anapec </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="icon" type="image/png" href="assets/images/anp.png">

        <!-- Bootstrap Css -->
        <link href="assetss/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assetss/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assetss/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />



        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">

    <!-- Color -->
    <link rel="stylesheet" type="text/css" id="skin"  href="assets/css/themes/default.css">
    <!-- google font  -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,800" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="assets/images/anp.png">

 



    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
                                <?php 
                    session_start();
                    include('connection.php'); 
                    ?>
                    
                    <?php include('headercp.php'); ?>
                                <!-- End Navigation Bar-->

            
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Dashboard</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                        

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">Chercheur (e -s ) d'emploi</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-success badge-pill float-left mt-3" style="background:green">95 Aujourd'hui <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> 8451 </h2>
                                            <p class="text-muted mb-3">Total</p>
                                        </div>
                                        <div class="progress progress-bar-alt-pink progress-sm">
                                            <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 77%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">Employeur (e -s )</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-success badge-pill float-left mt-3" style="background:green">32 Aujourd'hui <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> 322 </h2>
                                            <p class="text-muted mb-3">Total</p>
                                        </div>
                                        <div class="progress progress-bar-alt-success progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 47%;">
                                                <span class="sr-only">47% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">Porteur (e -s ) projet</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-warning badge-pill float-left mt-3" style="background:orange">18 Aujourd'hui <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> 102 </h2>
                                            <p class="text-muted mb-3">Total</p>
                                        </div>
                                        <div class="progress progress-bar-alt-warning progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">Visiteurs</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-warning badge-pill float-left mt-3" style="background:orange">902 Aujourd'hui <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> 9108 </h2>
                                            <p class="text-muted mb-3">En Juin</p>
                                        </div>
                                        <div class="progress progress-bar-alt-warning progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 90%;">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                        

                        </div>

                        
                        <!-- end row -->



                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                         
                                    </div>

                                    <h4 class="header-title mt-0">Chart</h4>

                                    <div class="widget-chart text-center">
                                            <img src="assets/images/chart.png" alt="">
                                    </div>
                                </div>
                            </div><!-- end col -->

                            
                    
                           

                            <div class="col-xl-8">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">Evenements</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Titre</th>
                                                <th>Date</th>
                                                <th>Lieu</th>
                                                <th>Status</th>
                                             </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Réunion (Site Web Anapec)</td>
                                                    <td>01/01/2024</td>
                                                    <td>Rabat</td>
                                                    <td><span class="badge badge-success" style="background:greenyellow">En cours</span></td>

                                                 </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Discution anamoukawil</td>
                                                    <td>01/01/2025</td>
                                                    <td>Casablanca</td>
                                                    <td><span class="badge badge-warning" style="background:orange">Fini</span></td>

                                                 </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mission A</td>
                                                    <td>01/05/2017</td>
                                                    <td>Tanger</td>
                                                    <td><span class="badge badge-warning" style="background:orange">Fini</span></td>
                                                 </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Mission B</td>
                                                    <td>01/01/2017</td>
                                                    <td>Rabat</td>
                                                    <td><span class="badge badge-warning" style="background:orange">Fini</span>
                                                    </td>
                                                 </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Action A</td>
                                                    <td>01/01/2024</td>
                                                    <td>Rabat</td>
                                                    <td><span class="badge badge-warning" style="background:orange">Fini</span></td>
                                                 </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Pour info</td>
                                                    <td>01/01/2024</td>
                                                    <td>Casablanca</td>
                                                    <td><span class="badge badge-warning" style="background:orange">Fini</span></td>
                                                 </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->

                <?php include('footer.php'); ?>

                <!-- end Footer -->

            </div>

        

        </div>
        <!-- END wrapper -->

   
        <!-- Vendor js -->
        <script src="assetss/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assetss/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assetss/libs/morris-js/morris.min.js"></script>
        <script src="assetss/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assetss/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assetss/js/app.min.js"></script>


            <!-- START JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/shuffleLetters.js"></script>
    <script type="text/javascript" src="assets/js/owl.caraousel.min.js"></script>
    <script type="text/javascript" src="assets/js/bootsnav.js"></script>
    <script type="text/javascript" src="assets/js/chosen.jquery.js"></script>
    <script type="text/javascript" src="assets/js/range-Slider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    
    <!-- Custom  js-->
    <script src="assets/js/app.js"></script>
    <!-- End JAVASCRIPT -->
        
    </body>
</html>