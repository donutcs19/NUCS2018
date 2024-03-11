<?php
include 'connectdb.php';

$strSQL = "DELETE FROM register_present ";
$strSQL .="WHERE id = '".$_GET["ID"]."' ";
$result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");
if($result)
{
	header('Location: ../EditPresent.php');
}
else
{
	echo "Error Delete [".$strSQL."]";
}
?>
