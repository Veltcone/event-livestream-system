<!DOCTYPE html>
<html lang="en">
  <head>
      
      <style type="text/css">
        body {
            margin: 0 0 0 0;
        }
      </style>
      
      <!--Global Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Title and Favicon -->
    <title>RAM Livestream</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

      
      <!-- Styling Links -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      

         <!-- Slider Refs -->

      
	 <!-- Feather Icons -->
	 <link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	 <script src="js/modernizr.custom.js"></script>
          
          
          <!-- /Slider Refs -->
      
    </head>
    
    
      <body id="top" oncontextmenu="return false">
          
      <!-- Landing -->
      
      <section class="landing fullpage" id="landing">
          <div class="text">
              <img src="assets/apm.png" class="apm animated fadeInDown ani1">
              <h1 class="h1text animated fadeInUp ani2"><span class="bold">canada bkys ram <br/>livestream</span></h1>
              
             <!-- Empty Input -->          
                        <?php 
                        if(@$_GET['Empty']==true)
                        {
                        ?>
                        <div class="input100 red animated fadeIn ani3"><?php echo $_GET['Empty'] ?></div>                                
                        <?php
                           }
                        ?>
                        
                        
              <!-- Invalid Input -->
                        <?php 
                        if(@$_GET['Invalid']==true)
                        {
                         ?>
                         
                        <div class="input100 red animated fadeIn ani3"><?php echo $_GET['Invalid'] ?></div>   
                        
                        <?php
                        }
                        ?>
              
              <!-- Form Code -->
		  
              <div class="wrap-login100">

                    <form class="login100-form" method="POST" action="process.php">
                        
                        <div class="wrap-input100 animated fadeIn ani3">
                            <input class="input100" type="text" name="username" placeholder="username">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 animated fadeIn ani4">
                            <input class="input100" type="password" name="password" placeholder="password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn animated fadeIn ani5">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn type" type="submit" name="login">
                                    login
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
		  
	  	<!-- /Form Code -->
              
              <img src="assets/footer.png" class="footer animated fadeIn ani6">
          </div>
          
		  
      </section>
      


          
        <!-- Regular JavaScript -->  
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
