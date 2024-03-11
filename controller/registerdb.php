<?php
        require 'connectdb.php';
        date_default_timezone_set('Asia/Bangkok');


if (isset($_POST['upload']))
{
    $filename = $_FILES["file-pdf"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file-pdf"];
    $allowed_file_types = array('.pdf');    

    if (in_array($file_ext,$allowed_file_types))
    {   
        // Rename file
        $newfilenamePDF = md5($file_basename) . $file_ext;
        if (file_exists("../upload/file_pdf_บทคัดย่อ" . $newfilenamePDF))
        {
            // file already exists error
            /*echo "You have already uploaded this file.";*/
        }
        else
        {       
            move_uploaded_file($_FILES["file-pdf"]["tmp_name"], "../upload/file_pdf_บทคัดย่อ/" . $newfilenamePDF);
            /*echo "File uploaded successfully."; */    
        }
    }
    
   /* echo "$newfilenamePDF";*/

    $filename = $_FILES["file-word"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file-word"];
    $allowed_file_types = array('.doc', '.docx');   

    if (in_array($file_ext,$allowed_file_types))
    {   
        // Rename file
        $newfilenameWord = md5($file_basename) . $file_ext;
        if (file_exists("../upload/file_word_บทคัดย่อ" . $newfilenameWord))
        {
            // file already exists error
            /*echo "You have already uploaded this file.";*/
        }
        else
        {       
            move_uploaded_file($_FILES["file-word"]["tmp_name"], "../upload/file_word_บทคัดย่อ/" . $newfilenameWord);
            /*echo "File uploaded successfully."; */    
        }
    }
    
   /* echo "$newfilenameWord";*/

    $filename = $_FILES["file-pdf2"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file-pdf2"];
    $allowed_file_types = array('.pdf');    

    if (in_array($file_ext,$allowed_file_types))
    {   
        // Rename file
        $newfilenamePDF2 = md5($file_basename) . $file_ext;
        if (file_exists("../upload/file_pdf_บทความฉบับเต็ม" . $newfilenamePDF2))
        {
            // file already exists error
            /*echo "You have already uploaded this file.";*/
        }
        else
        {       
            move_uploaded_file($_FILES["file-pdf2"]["tmp_name"], "../upload/file_pdf_บทความฉบับเต็ม/" . $newfilenamePDF2);
            /*echo "File uploaded successfully."; */    
        }
    }
    
   /* echo "$newfilenamePDF";*/

    $filename = $_FILES["file-word2"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file-word2"];
    $allowed_file_types = array('.doc', '.docx');   

    if (in_array($file_ext,$allowed_file_types))
    {   
        // Rename file
        $newfilenameWord2 = md5($file_basename) . $file_ext;
        if (file_exists("../upload/file_word_บทความฉบับเต็ม" . $newfilenameWord2))
        {
            // file already exists error
            /*echo "You have already uploaded this file.";*/
        }
        else
        {       
            move_uploaded_file($_FILES["file-word2"]["tmp_name"], "../upload/file_word_บทความฉบับเต็ม/" . $newfilenameWord2);
            /*echo "File uploaded successfully."; */    
        }
    }
    
   /* echo "$newfilenameWord";*/

    $filename = $_FILES["payment"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["payment"];
    $allowed_file_types = array('.jpg', '.png');   

    if (in_array($file_ext,$allowed_file_types))
    {   
        // Rename file
        $newfilenamePay = md5($file_basename) . $file_ext;
        if (file_exists("../upload/payment" . $newfilenamePay))
        {
            // file already exists error
            /*echo "You have already uploaded this file.";*/
        }
        else
        {       
            move_uploaded_file($_FILES["payment"]["tmp_name"], "../upload/payment/" . $newfilenamePay);
            /*echo "File uploaded successfully."; */    
        }
    }
    
   /* echo "$newfilenamePay";*/
}

        $reg_frontname = $_POST['frontname'];
        $reg_name = $_POST['name'];
        $reg_surname = $_POST['surname'];
        $reg_password = $_POST['password'];
        $reg_status = $_POST['status'];
        $reg_univer = $_POST['univer'];
        $reg_type_register = $_POST['type_register'];
        $reg_email = $_POST['email'];
        $reg_article = $_POST['article'];
        $reg_paper = $_POST['paper'];
        $reg_meeting = $_POST['meeting'];
       
        /*$salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_login_password = hash_husernamemac('sha256', $login_password, $salt);*/
    

        $query = 	"INSERT INTO register_present 
        						(fontname
        						,name
        						,sname
                                ,password
        						,status
        						,university
        						,type_register
        						,email
                                ,type_present
                                ,file_word
                                ,file_pdf
                                ,file_word2
                                ,file_pdf2
                                ,payment
                                ,review
                                ,meeting) 
        		 	
        		 	 VALUES ('$reg_frontname'
        		  		 	,'$reg_name'
        		  			,'$reg_surname'
                            ,'$reg_password'
        		  			,'$reg_status'
        		 			,'$reg_univer'
        		  			,'$reg_type_register'
        		  			,'$reg_email'
                            ,'$reg_article'
                            ,'$newfilenameWord'
                            ,'$newfilenamePDF'
                            ,'$newfilenameWord2'
                            ,'$newfilenamePDF2'
                            ,'$newfilenamePay'
                            ,'$reg_paper'
                            ,'$reg_meeting')";

        
        $result = mysqli_query($dbcon,$query);
        
        if ($result) {
         
            echo "<script>alert('ลงทะเบียนสำเร็จแล้ว');window.location='../Register_Table.php';</script>";
		exit();
        } else {
        	echo "<script>alert('ลงทะเบียนไม่สำเร็จแล้ว');window.location='../index.php';</script>";
        	 /*.  mysqli_error($dbcon);*/
		exit();
          
        }
        
        mysqli_close($dbcon);
	
?>


