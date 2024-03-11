<?php
        session_start();
        if (!isset($_SESSION['Login_id'])) {
            header("Location: Login_SyS/Login_user.php");
        }
        include 'connectdb.php';
        $session_login_id = $_SESSION['Login_id'];
        
        $qry_user = "SELECT * FROM register_present WHERE id ='$session_login_id'";
        $result_user = mysqli_query($dbcon,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_fontname = $row_user[' fontname'];
            $s_name = $row_user['name'];
            $s_sname = $row_user['sname'];
            $s_status = $row_user['status'];
            $s_university = $row_user['university'];
            $s_type_register = $row_user['type_register'];
            $s_type_prent = $row_user['type_present'];
            $s_email = $row_user['email'];
            $s_file_word = $row_user['file_word'];
            $s_file_pdf = $row_user['file_pdf'];
            $s_file_word2 = $row_user['file_word2'];
            $s_file_pdf2 = $row_user['file_pdf2'];
            $s_password = $row_user['password'];
            $s_payment = $row_user['payment'];
            $s_review = $row_user['review'];
            $s_meeting = $row_user['meeting'];

            mysqli_free_result($result_user);
        }
        mysqli_close($dbcon);