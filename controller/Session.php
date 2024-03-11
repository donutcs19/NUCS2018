<?php
        session_start();
        if (!isset($_SESSION['Login_id'])) {
            header("Location: Login_SyS/Login.php");
        }
        include 'connectdb.php';
        $session_login_id = $_SESSION['Login_id'];
        
        $qry_user = "SELECT * FROM member WHERE id ='$session_login_id'";
        $result_user = mysqli_query($dbcon,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_login_username = $row_user['login_username'];
            $s_login_password = $row_user['login_password'];
            mysqli_free_result($result_user);
        }
        mysqli_close($dbcon); 