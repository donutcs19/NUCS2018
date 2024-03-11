<?php
    include '../controller/connectdb.php';
    session_start();
    
    $login_name = mysqli_real_escape_string($dbcon,$_POST['name']);
    $login_sname = mysqli_real_escape_string($dbcon,$_POST['sname']);
    $login_password = mysqli_real_escape_string($dbcon,$_POST['password']);

    
    $strSQL = "SELECT * FROM register_present WHERE name = '".$login_name."' AND 
                                                    sname = '".$login_sname."' AND
                                                    password = '".$login_password."'";
    $objQuery = mysqli_query($dbcon,$strSQL)  or die ("Error Query [".$strSQL."]"); //or die == check error
    $objResult = mysqli_fetch_array($objQuery);
    
    if($objResult){
        $_SESSION['Login_id'] = $objResult["id"];
       header("Location: ../User.php");
        
    }else{
       header("Location: Login_Fail_user.php");
   }
       
 
    