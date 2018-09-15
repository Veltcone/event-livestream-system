<?php
require_once('connection.php');
session_start();

    if(isset($_POST['login'])) {
        if(empty($_POST['username']) || empty($_POST['password'])) {
            header("location:index.php?Empty= Please fill in all fields");
        }
        else {
            $query="select * from loginformml where username='".$_POST['username']."' and password='".$_POST['password']."' limit 1";
            $result=mysqli_query($con, $query);
            
            if(mysqli_num_rows($result) == 1) {
                $logged_in_user = mysqli_fetch_assoc($result);
    			if ($logged_in_user['type'] == 'admin') {
    				$_SESSION['User'] = $logged_in_user['username'];
    				$_SESSION['type'] = $logged_in_user['type'];
    				header("location:admin.php");		  
    			}else{
    				$_SESSION['User'] = $logged_in_user['username'];
    				$_SESSION['type'] = $logged_in_user['type'];
    				header("location:bklivestream.php");
    			}
            }
            else {
                header("location:index.php?Invalid= Invalid Username or Password");
            }
        }
    }
    else {
        echo 'If you see this, Please contact your lead!<br/>Error code: bapsprocess1';
    }

?>