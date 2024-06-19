<style>
.dropdown {
  position: relative;
  display: inline-block;
  z-index: 10;
  color:white;
  font-size:19px;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 10;
}

.dropdown:hover .dropdown-content {
  display: block;
  z-index: 10;
}
</style>

<div class="top-header">


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="wrap-top-information">
                    <ul class="list-inline left">
                        <li><a href="#"><i class="fa fa-phone"></i><span style="font-size: 16px;">Appelez-nous: 05 22 78 94 50</span></a></li> 
                        <li><a href="#"><i class="fa fa-home"></i><span style="font-size: 16px;">Email: a.anapec@gmail.com </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="wrap-top-information">
                    <ul class="list-inline right">
                        <?php
                        if(isset($_SESSION["idc"])){       ?> 
                    
                         
                                <li class="dropdown">
                                
                                Bienvenue :      <?php echo $_SESSION["nomc"];   ?> <i class="fa fa-user" style="color:orange"></i>
                                    <div class="dropdown-content">
                                        <a href="deco.php"><span  class="fa fa-user" style="color: #ff4900;"> Déconnecter</span></a>
                                    </div>
                                </li>

                                <?php    }  elseif(isset($_SESSION["ide"])){       ?> 
                    
                         
                    <li class="dropdown">
                    
                    Bienvenue :      <?php echo $_SESSION["nome"];   ?> <i class="fa fa-user" style="color:orange"></i>
                        <div class="dropdown-content">
                            <a href="deco.php"><span  class="fa fa-user" style="color: #ff4900;"> Déconnecter</span></a>
                        </div>
                    </li>

  
                      
                      
                        <?php   }else{ ?> 
                                
                                 <li class="dropdown">
                                    
                                    Login <i class="fa fa-user" style="color:red"></i>
                                        <div class="dropdown-content ">
                                        <a href="login.php" class=""><span  class="fa fa-exit" style="color: #ff4900;"> Chercheur Emp</span></a>
                                        <hr>
                                        <a href="logine.php"><span  class="fa fa-exit" style="color: #ff4900;"> Employeurs</span></a>
                                        </div>
                                </li>

                        <?php  } ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====  End of Section pageheader  ====-->
<nav class="navbar navbar-default navbar-sticky white bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-search">
                    </i>
                </span>
                <input class="form-control" placeholder="Search" type="text">
                    <span class="input-group-addon close-search">
                        <i class="fa fa-times">
                        </i>
                    </span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">
        <!-- Start Atribute Navigation -->
        
        <!-- End Atribute Navigation -->
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#navbar-menu" data-toggle="collapse" type="button">
                <i class="fa fa-bars">
                </i>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/anp.png" class="logo" width="70px" height="70px">
            </a>
        </div>
        <!-- End Header Navigation -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
              
                <li style="text-align: center; margin-top: 5px;"><a href="index.php"> Acceuil</a></li>
                    
                       
                   
                



                <li class="dropdown" style="text-align: center;margin: 0 10px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Espace <br>  Chercheur.e.s d'emploi
        </a>
        <ul class="dropdown-menu"style="text-align:center">
            <li><a href="#">services aux chercheurs d'emploi</a></li>
            <li><a href="#">offres d'emploi</a></li>
            <li><a href="#">offres de formation</a></li>
            <li><a href="#">mon projet professionnel</a></li>
            <li><a href="#" style="color:rgb(207, 87, 18);font-weight: bold;font-size: 20px;">MOUSTA9BALI</a></li>
        </ul>        
                            
               </li>         

                        
                    
                
               
                <li class="dropdown"style="text-align: center;margin: 0 10px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Espace <br>  Employeurs</a>
                    
                    <ul class="dropdown-menu"style="text-align:center">
                      
                       
                       
                    <li><a href="#">services aux employeurs  </a></li>
                    <li><a href="#">aides à l'emploi </a></li>
                    <li><a href="#">employeur domestique </a></li>
                    <li><a href="#">Etude & Rapport </a></li>
                    <li><a href="#"style="color:rgb(207, 87, 18);font-weight: bold;font-weight: bold;font-size:30px;text-align:center">كفاءات</a></li>
                            
                                
                            
                        
                       
                        
                    </ul>
                </li>


                <li class="dropdown"style="text-align: center;margin: 0 10px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Espace <br>   Entrepreneur.e.s
                    </a>
                    <ul class="dropdown-menu"style="text-align: center">
                        <li><a href="#">Services pour l'entrepreneuriat la TPE </a></li>
                        <li><a href="#">l'unité Economique <br> informelle</a></li>
                        <li><a href="#">TPE <br>  </a></li>
                        <li><a href="#">Auto Entrepreneur </a></li>
                        <li><a href="#">Porteur de Projet </a></li>
                        <li><a href="#">Information Entrepreneuriat </a></li>
                        <li><a href="#"> L'accompagnement</a></li>
                        <li><a href="#"> Les Mesures <br> incitatives Etatiques</a></li>
                        <li><a href="https://anamoukawil.ma/" target="_blank" style="color:rgb(207, 87, 18);font-weight: bold;">ANA MOUKAWIL</a></li>
                            
                            
                            
                        
                         
                    </ul>
                </li>


                <li class="dropdown"style="text-align: center;margin: 0 10px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Espace <br>   Mobilité à international
                    </a>
                    <ul class="dropdown-menu"style="text-align: center">
                      <li><a href="#">Services de Mobilité <br> Inernationale  </a></li>
                      <li><a href="#"> Migration de Travail </a></li>
                      <li><a href="#"> Mes Outils</a></li>
                      <li><a href="#">  Ma Sécurité</a></li>
                      <li><a href="#"> Migration de retour </a></li>
                </li>            
                               
                          
                        
                 
                            
                        
                       
                        
                    </ul>
                </li>



                <li class="dropdown" style="text-align: center;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Espace <br> Emploi et Compétence
                    </a>
                    <ul class="dropdown-menu"style="text-align: center;">
                        <li><a href="Veille.php"> Marché d'Emploi</a></li>
                        <li><a href="#"style="color:rgb(207, 87, 18);font-weight: bold;font-size:30px;text-align:center">إنارة</a></li>
                       
                        
                            
                                
                            
                        
                       
                        
                    </ul>
                </li>



                
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<!-- End Navigation -->
<div class="clearfix">
</div>