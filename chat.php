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
                <h4 class="page-title">discussion interne (Privé)</h4>

                

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        
        <div class="col-xl-3 col-lg-4">
            <div class="card chat-list-card mb-xl-0">
                <div class="card-body">
                    
                    <div class="media">
                        <div class="mr-2 align-self-center">
                            <img src="assets/images/users/user-1.jpg" alt="" class="rounded-circle avatar-sm">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">M. Imane</h5>
                            <p class="font-13 text-muted mb-0">Directrice Générale</p>
                        </div>
                    
                    </div>

                    <hr class="my-3">

                    <div class="search-box chat-search-box">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="mdi mdi-magnify search-icon"></i>
                    </div>

                    <hr class="my-3">

                    <div class="">
                        <ul class="list-unstyled chat-list slimscroll mb-0" style="max-height: 410px;">
                            <li class="active">
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img active align-self-center mr-2">
                                            <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Asmaa</h5>
                                            <p class="text-truncate mb-0">Développeur</p>
                                        </div>
                                        <div class="font-11">05 min</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img active avatar-sm align-self-center mr-2">
                                            <span class="avatar-title rounded-circle bg-soft-success text-success">
                                                <i class="mdi mdi-account"></i>
                                            </span>
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Achraf</h5>
                                            <p class="text-truncate mb-0">Resources humains</p>
                                        </div>
                                        <div class="font-11">20 min</div>
                                    </div>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img align-self-center mr-2">
                                            <img src="assets/images/users/user-3.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Imane</h5>
                                            <p class="text-truncate mb-0">Directrice</p>
                                        </div>
                                        <div class="font-11">32 min</div>
                                    </div>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img active align-self-center mr-2">
                                            <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Oussama</h5>
                                            <p class="text-truncate mb-0">Sécritaire</p>
                                        </div>
                                        <div class="font-11">01 hr</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img align-self-center mr-2">
                                            <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Rachid</h5>
                                            <p class="text-truncate mb-0">Inge</p>
                                        </div>
                                        <div class="font-11">01 hr</div>
                                    </div>
                                </a>
                            </li>

                            <li class="unread">
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img avatar-sm align-self-center mr-2">
                                            <span class="avatar-title  rounded-circle bg-soft-primary text-primary">
                                                <i class="mdi mdi-account"></i>
                                            </span>
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Rim</h5>
                                            <p class="text-truncate mb-0">Service</p>
                                        </div>
                                        <div class="font-11">02 hr</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img active align-self-center mr-2">
                                            <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Karim</h5>
                                            <p class="text-truncate mb-0">service</p>
                                        </div>
                                        <div class="font-11">04 hr</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="chat-user-img align-self-center mr-2">
                                            <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="">
                                        </div>
                                        
                                        <div class="media-body overflow-hidden">
                                            <h5 class="text-truncate font-14 mt-0 mb-1">Hicham</h5>
                                            <p class="text-truncate mb-0">autres</p>
                                        </div>
                                        <div class="font-11">05 hr</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="conversation-list-card card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1 text-truncate">M. Imane</h5>
                            <p class="font-13 text-muted mb-0"><i class="mdi mdi-circle text-success mr-1 font-11"></i> Active</p>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop font-20" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">

                    <div>
                        <ul class="conversation-list slimscroll" style="max-height: 410px;">
                            <li>
                                <div class="chat-day-title">
                                    <span class="title">Today</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/user-2.jpg" alt="">
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">M. Imane</span>
                                            <p>
                                                Bon courage
                                            </p>
                                        </div>
                                        <span class="time">10:00</span>
                                    </div>
                                </div>
                            </li>

                            <li class="odd">
                                <div class="message-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/user-1.jpg" alt="">
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">Achraf</span>
                                            <p>
                                                Rapport est prêt 
                                            </p>
                                        </div>
                                        <span class="time">10:01</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="message-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/user-2.jpg" alt="">
                                        
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">M. Imane</span>
                                            <p>
                                                Reunion à Rabat
                                            </p>
                                        </div>
                                        <span class="time">10:03</span>
                                    </div>
                                </div>
                            </li>
                         

                            <li class="odd">
                                <div class="message-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/user-1.jpg" alt="">
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <span class="user-name">Asmaa</span>
                                            <p>
                                               bien reçu
                                            </p>
                                        </div>
                                        <span class="time">10:04</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-3 conversation-input border-top">
                    <div class="row">
                        <div class="col">
                            <div>
                                <input type="text" class="form-control" placeholder="Enter Message...">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary chat-send width-md waves-effect waves-light"><span class="d-none d-sm-inline-block mr-2">Send</span> <i class="mdi mdi-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
    
</div> <!-- container-fluid -->

</div>


 
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