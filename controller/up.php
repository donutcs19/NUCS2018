<?php

// Upload and Rename File

if (isset($_POST['submit']))
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
		if (file_exists("../upload/file_pdf" . $newfilenamePDF))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file-pdf"]["tmp_name"], "../upload/file_pdf/" . $newfilenamePDF);
			echo "File uploaded successfully.";		
		}
	}
	
	echo "$newfilenamePDF";

	$filename = $_FILES["file-word"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file-word"];
	$allowed_file_types = array('.doc', '.docx');	

	if (in_array($file_ext,$allowed_file_types))
	{	
		// Rename file
		$newfilenameWord = md5($file_basename) . $file_ext;
		if (file_exists("../upload/file_word" . $newfilenameWord))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file-word"]["tmp_name"], "../upload/file_word/" . $newfilenameWord);
			echo "File uploaded successfully.";		
		}
	}
	
	echo "$newfilenameWord";
}


echo "ชื่อไฟล์ : $newfilenameWord";
?>