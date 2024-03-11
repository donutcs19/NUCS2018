<?php
        require 'connectdb.php';
       


if (isset($_POST['upload']))
{
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
        $reg_status = $_POST['status'];
        $reg_univer = $_POST['univer'];
        $reg_type_register = $_POST['type_register'];
        $reg_email = $_POST['email'];
        $reg_meeting = $_POST['meeting'];
       
        /*$salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_login_password = hash_husernamemac('sha256', $login_password, $salt);*/
    

        $query = 	"INSERT INTO register_present 
        						(fontname
        						,name
        						,sname
        						,status
        						,university
        						,type_register
        						,email
                                ,payment
                                ,meeting) 
        		 	
        		 	 VALUES ('$reg_frontname'
        		  		 	,'$reg_name'
        		  			,'$reg_surname'
        		  			,'$reg_status'
        		 			,'$reg_univer'
        		  			,'$reg_type_register'
        		  			,'$reg_email'
                            ,'$newfilenamePay'
                            ,'$reg_meeting')";

        
        $result = mysqli_query($dbcon,$query);
        
        if ($result) {
         
            echo "<script>alert('ลงทะเบียนสำเร็จแล้ว');window.location='../Register_Table.php'</script>";
		exit();
        } else {
        	echo "<script>alert('ลงทะเบียนไม่สำเร็จแล้ว');window.location='../index.php';</script>";
        	 /*.  mysqli_error($dbcon);*/
		exit();
          
        }
        
        mysqli_close($dbcon);
	
?>
