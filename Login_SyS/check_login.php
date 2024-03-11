<?php
    include '../controller/connectdb.php';
    session_start();
    
    $login_username = mysqli_real_escape_string($dbcon,$_POST['username']);
    $login_password = mysqli_real_escape_string($dbcon,$_POST['password']);

    
    $strSQL = "SELECT * FROM member WHERE login_username = '".$login_username."' AND login_password = '".$login_password."' ";
    $objQuery = mysqli_query($dbcon,$strSQL)  or die ("Error Query [".$strSQL."]"); //or die == check error
    $objResult = mysqli_fetch_array($objQuery);
    
    if($objResult){
        $_SESSION['Login_id'] = $objResult["id"];
       header("Location: ../AdminP.php");
        
    }else{
       header("Location: Login_Fail.php");
   }
       
 
    