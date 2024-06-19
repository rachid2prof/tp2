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

 

.topa a{
    margin:20px 0px 0 10px;
    color:white;
    border-bottom:3px solid #ef6b00;
}

.topa a:hover{
    color:white;
border-bottom:3px solid orange;
}
</style>

<div class="top-header"  style="height:98px; width:100%">


    <div class="container">
        <div class="row"  >
            <div class="col-xs-8 col-sm-8 col-md-10"  style="margin-left:-170px;">
                <div class="wrap-top-information">
                       <a class="navbar-brand" href="index.php">
                            <img src="assets/images/anp.png" class="logo" width="70px" height="70px">
                        </a>

                        <div class="topa">
                                <a class="navbar-brand" href="cpanel.php"> Dashboard  </a>
                                <a class="navbar-brand" href="chat.php"> Groupe du travail  </a>
                                <a class="navbar-brand" href="#"> Publier un évenement  </a>
                                <a class="navbar-brand" href="#"> Modifier Anapec  </a>

                                
                                               
                        </div>
                     

                </div>
            </div>

            <div class="col-md-3" style="margin: 37px 0 0 64px;">
            <?php      if(isset($_SESSION["ida"])){       ?> 
                                                
                                                    
                                                <div class="dropdown">
                                                
                                                Espace admin :    <i class="fa fa-user" style="color:orange"></i>  <?php echo $_SESSION["noma"];   ?> 
                                                    <div class="dropdown-content">
                                                        <a href="#"><span style="color: #ff4900;"> Préférence</span></a>
                                                        <hr>
                                                        <a href="deco_admin.php"><span style="color: #ff4900;"> Déconnecter</span></a>
                                                    </div>
                                                </div>

                                               
                                                <?php  } else{ header("location:logina.php");  } ?> 


            </div>
            


        </div>
    </div>
</div>
<!--====  End of Section pageheader  ====-->
 
<!-- End Navigation -->
<div class="clearfix">
</div>