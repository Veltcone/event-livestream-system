<?php
require_once('connection.php');
session_start();

    if(isset($_POST['confirm1'])) {
        if(empty($_POST['livelink1'])) {
            header("location: http://dradh.com/sorry/");
        }
        else {
            $query="UPDATE `livelinkdb` SET `link`='".$_POST['livelink1']."' WHERE linkid = 1";
            $result=mysqli_query($con, $query);
            
            header("location: admin.php");
        }
    }
    
    if(isset($_POST['confirm2'])) {
        if(empty($_POST['livelink2'])) {
            header("location: http://dradh.com/sorry/");
        }
        else {
            $query="UPDATE `livelinkdb` SET `link`='".$_POST['livelink2']."' WHERE linkid = 2";
            $result=mysqli_query($con, $query);
            header("location: admin.php");
        }
    }
    

?>