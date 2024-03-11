<?php
		//*** Update Record ***//
		include 'connectdb.php';
       
		$strSQL = "UPDATE register_present";
		$strSQL .=" SET   fontname	 = '".$_POST["frontname"]."'
						, name = '".$_POST["name"]."'
						, sname = '".$_POST["surname"]."'
						, status = '".$_POST["status"]."'
						, university = '".$_POST["univer"]."'
						, type_register = '".$_POST["type_register"]."'
						, email = '".$_POST["email"]."'
						, password = '".$_POST["password"]."'
						, type_present = '".$_POST["article"]."' 
						, meeting = '".$_POST["meeting"]."' 
						 WHERE id = '".$_GET["ID"]."' ";
		
		$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		
	
	if($_FILES["file-word"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["file-word"]["tmp_name"],"../upload/file_word_บทคัดย่อ/".$_FILES["file-word"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("../upload/file_word_บทคัดย่อ/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE register_present ";
			$strSQL .=" SET file_word = '".$_FILES["file-word"]["name"]."' WHERE id = '".$_GET["ID"]."' ";
			$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		

			header('Location: ../User.php');
			

		}
	}

	if($_FILES["file-pdf"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["file-pdf"]["tmp_name"],"../upload/file_pdf_บทคัดย่อ/".$_FILES["file-pdf"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("../upload/file_pdf_บทคัดย่อ/".$_POST["hdnOldFile2"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE register_present ";
			$strSQL .=" SET file_pdf = '".$_FILES["file-pdf"]["name"]."' WHERE id = '".$_GET["ID"]."' ";
			$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		

			header('Location: ../User.php');
			

		}
	}

	if($_FILES["file-word2"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["file-word2"]["tmp_name"],"../upload/file_word_บทความฉบับเต็ม/".$_FILES["file-word2"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("../upload/file_word_บทความฉบับเต็ม/".$_POST["hdnOldFile3"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE register_present ";
			$strSQL .=" SET file_word2 = '".$_FILES["file-word2"]["name"]."' WHERE id = '".$_GET["ID"]."' ";
			$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		

			header('Location: ../User.php');
			

		}
	}

	if($_FILES["file-pdf2"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["file-pdf2"]["tmp_name"],"../upload/file_pdf_บทความฉบับเต็ม/".$_FILES["file-pdf2"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("../upload/file_pdf_บทความฉบับเต็ม/".$_POST["hdnOldFile4"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE register_present ";
			$strSQL .=" SET file_pdf2 = '".$_FILES["file-pdf2"]["name"]."' WHERE id = '".$_GET["ID"]."' ";
			$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		

			header('Location: ../User.php');
			

		}
	}

	if($_FILES["payment"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["payment"]["tmp_name"],"../upload/payment/".$_FILES["payment"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("../upload/payment/".$_POST["hdnOldFile5"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE register_present ";
			$strSQL .=" SET payment = '".$_FILES["payment"]["name"]."' WHERE id = '".$_GET["ID"]."' ";
			$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");		

			header('Location: ../User.php');
			

		}
	}
	
	header('Location: ../User.php');
?>

