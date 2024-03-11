<?php
		//*** Update Record ***//
		include 'connectdb.php';
       
		$strSQL = "UPDATE register_present";
		$strSQL .=" SET  review = '".$_POST["paper"]."' WHERE id = '".$_GET["ID"]."' ";
		
		$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");	
		
	header('Location: ../AdminP2.php');
?>

