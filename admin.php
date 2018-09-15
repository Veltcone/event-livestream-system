<?php 
    session_start();
    require_once('connection.php');
    
    if(isset($_SESSION['User'])){  //meaning user is logged in
        if(isset($_SESSION['type'])){
            if( $_SESSION['type'] !== 'admin' ){
                if( $_SESSION['type'] == 'bk' ){
                    header('Location: bklivestream.php');
                }
                elseif( $_SESSION['type'] == 'ys' ){
                    header('Location: yslivestream.php');
                }
                else {
                    header('Location: index.php');
                }
            }
        }
    }
    else{
       //meaning user is not logged or session had terminated 
       header('Location: index.php');
    }
    
    $queryselect1="SELECT * FROM `livelinkdb` WHERE linkid = 1";
    $resultselect1=mysqli_query($con, $queryselect1);
    
    if(mysqli_num_rows($resultselect1) == 1) {
        $fetchlinkid1 = mysqli_fetch_assoc($resultselect1);
        $livelink1 = $fetchlinkid1['link'];
    }
    
    $queryselect2="SELECT * FROM `livelinkdb` WHERE linkid = 2";
    $resultselect2=mysqli_query($con, $queryselect2);
    
    if(mysqli_num_rows($resultselect2) == 1) {
        $fetchlinkid2 = mysqli_fetch_assoc($resultselect2);
        $livelink2 = $fetchlinkid2['link'];
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Console - RAM Live</title>
    <link rel="shortcut icon" href="assets/admin/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/admin.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
  <div id="landing_wrapper" class="center_content">
    <h3 class="animated fadeInDown">Live admin console</h3>
    
            <!-- Live Link 1 -->
        <form class="login100-form" method="POST" action="livelink.php">
            <div class="login100-livelinkgroup animated fadeInRight">
                <div class="login100-div">
                    <div class="wrap-input100 animated fadeIn ani3">
                        <input class="input100" type="text" name="livelink1" placeholder="livestream link 1" value="<?php echo $livelink1; ?>">
                        <span class="focus-input100"></span>
                    </div>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" name="confirm1">
                            confirm
                        </button>
                    </div>
                </div>
            </div>
          </form>
            <!-- Live Link 2 -->
        <form class="login100-form lessmargin" method="POST" action="livelink.php">
            <div class="login100-livelinkgroup animated fadeInLeft">
                <div class="login100-div">
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="livelink2" placeholder="livestream link 2" value="<?php echo $livelink2; ?>">
                        <span class="focus-input100"></span>
                    </div>
                </div>
                <div class="container-login100-form-btn animated fadeIn ani5">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" name="confirm2">
                            confirm
                        </button>
                    </div>
                </div>
            </div>
        </form>
      
      
      
      <div id="coming_soon" class="animated fadeIn">
      <span class="staticbold">Static:</span> https://www.youtube.com/embed/XPcaVMNT-yU
      </div>
      
      
    <ul id="menu_bar" class="center_content animated fadeIn">
      <li><a class="links" href="bklivestream.php" target="_blank">BK Live</a></li>
      <li><a class="links" href="yslivestream.php" target="_blank">YS Live</a></li>
    </ul>
  </div>
    
    <div class="videos animated fadeIn">
        <iframe width="412" height="231.75" src="<?php echo $livelink1; ?>" frameborder="0" allowfullscreen></iframe>
        
        <iframe width="412" height="231.75" src="<?php echo $livelink2; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <!-- Logout -->
    <div class="container-login100-form-btn2 animated fadeIn ani5">
        <?php 
        if(isset($_SESSION['User'])) {
            
            
        ?>
        <h5 class="phpjsn"><?php echo 'Jai Swaminarayan, ' . $_SESSION['User'].'<br/>'; ?></h5>
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            
            <?php echo '<a href="logout.php?logout"><button class="login100-form-btn2 type">log out</button></a>'; ?>
            
            <?php
                
            }
            ?>
            
        </div>
        
    </div>
</body>
</html>
