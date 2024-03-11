<?php
	ini_set("post_max_size", "120M");
    ini_set("upload_max_filesize", "120M");

    
date_default_timezone_set('Asia/Bangkok');
require 'mysqli.inc.php';


$Page = (isset($_GET["Page"]) !== false) ? $_GET["Page"] : $Page = 1;

if(isset($_POST['frontname'] ,$_POST['name'] ,$_POST['surname'] ,$_POST['status1'] ,$_POST['univer'] ,$_POST['type_register'] ,$_POST['email'])){
	

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$dateNow = date("YmdHis");
		$allowedExts = array("pdf", "doc", "docx");
		$newfilenamePDF = '';
		$newfilenameMSWORD = '';
		
		
		$sql = " 	select
							file_word
							,	file_pdf
					from
							register_present
					where
							id = {$mysqli->escape_string($_POST['id-member'])};
		";
		
		$result = $mysqli->query($sql);
		
		$rows = $result->fetch_assoc();
		
		
		if(isset($_POST['e-upload-msword'])!== false && $_POST['e-upload-msword'] === '1'){
			
			/* upload word */
			
			$extension = end(explode(".", $_FILES["file-word"]["name"]));
			 	
			if (($_FILES["file-word"]["type"] == "application/msword")
					|| ($_FILES["file-word"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
					&& in_array($extension, $allowedExts)){
				
				if ($_FILES["file-word"]["error"] > 0){
				
					echo "Return Code: " . $_FILES["file-word"]["error"] . "<br>";
				
				}else{
				
					if (file_exists("../upload/file_word/" . $_FILES["file-word"]["name"])) {
						
						echo $_FILES["file-word"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
						
					}else{
					
						$temp = explode(".",$_FILES["file-word"]["name"]);
						$file_old = explode("/",$rows['file_word']);
						
						if($rows['file_word'] !== '' && $rows['file_word'] !== null){
						
							unlink('../'.$rows['file_word']);
							$newfilenameMSWORD = $file_old[2];
						
						}else{
						
							$newfilenameMSWORD = $dateNow.'.'.end($temp);
						}
						
						$sourcePath = $_FILES['file-word']['tmp_name']; // Storing source path of the file in a variable
						$targetPath = "../upload/file_word/".$newfilenameMSWORD; // Target path where file is to be stored
						
						move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
						
						$newfilenameMSWORD = 'upload/file_word/'.$newfilenameMSWORD;
					
					}
				}
			}
		}
		
		if(isset($_POST['e-upload-pdf'])!== false && $_POST['e-upload-pdf'] === '1'){
			
			/* upload PDF */
			
			 $extension = end(explode(".", $_FILES["file-pdf"]["name"]));
			
			if (($_FILES["file-pdf"]["type"] == "application/pdf")
					&& in_array($extension, $allowedExts)){
			 
				if ($_FILES["file-pdf"]["error"] > 0){
					
					echo "Return Code: " . $_FILES["file-pdf"]["error"] . "<br/><br/>";
					
				}else{
						
					if (file_exists("../upload/file_pdf/" . $_FILES["file-pdf"]["name"])) {
						
						echo $_FILES["file-pdf"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
				
					}else{
					
						$temp = explode(".",$_FILES["file-pdf"]["name"]);
						$file_old = explode("/",$rows['file_pdf']);
						
						if($rows['file_pdf'] !== '' && $rows['file_pdf'] !== null){
						
							unlink('../'.$rows['file_pdf']);
							$newfilenamePDF = $file_old[2];
						
						}else{
						
							$newfilenamePDF = $dateNow.'.'.end($temp);
						}
						
						$sourcePath = $_FILES['file-pdf']['tmp_name']; // Storing source path of the file in a variable
						$targetPath = "../upload/file_pdf/".$newfilenamePDF; // Target path where file is to be stored
						
						move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
						
						$newfilenamePDF = 'upload/file_pdf/'.$newfilenamePDF;
					
					}
				}
			}
		}
		
		$sqli = "
					update 
							register_present 
					set
							frontname = '{$mysqli->escape_string($_POST['frontname'])}'
							,	name = '{$mysqli->escape_string($_POST['name'])}'
							,	surname = '{$mysqli->escape_string($_POST['surname'])}'
							,	status = '{$mysqli->escape_string($_POST['status1'])}'
							,	univer = '{$mysqli->escape_string($_POST['univer'])}'
							,	type_register = {$mysqli->escape_string($_POST['type_register'])}
							,	email = '{$mysqli->escape_string($_POST['email'])}'
				";
		
		if(isset($_POST['e-upload-msword'])!== false && $_POST['e-upload-msword'] === '1'){
		
			$sqli .= 	"
								,	file_word = '{$mysqli->escape_string($newfilenameMSWORD)}'
						";
		}

		if(isset($_POST['e-upload-pdf'])!== false && $_POST['e-upload-pdf'] === '1'){
		
			$sqli .= 	"
								,	file_pdf = '{$mysqli->escape_string($newfilenamePDF)}'
						";
		}
					
			$sqli .= 	"
							where
									id = {$mysqli->escape_string($_POST['id-member'])};
						";
		
		$resultCheck = $mysqli->query($sqli);
		
		if($resultCheck){
			
			
			echo "<script>alert('แก้ไขสำเร็จแล้ว');window.location='../aucs_admin_list.php?Page={$Page}&highlight_id={$_POST['id-member']}';</script>";
			exit();
				
		}else{
			
			echo "<script>alert('แก้ไขไม่สำเร็จแล้ว');window.location='../aucs_admin_list.php';</script>";
			exit();
			
		}
	
	
	}
	
}else{
	
	header('Location: ../register.php');
	exit(0);
}



