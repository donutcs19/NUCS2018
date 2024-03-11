<!DOCTYPE html>
<html>
<?php
        
        include 'controller/Session.php';
        
/*echo"<head><meta http-equiv='Refresh'content = '1; URL = Event_List.php'></head>";//ลิงค์หน่วงเวลา*/
?> 
<head>
	<title>Print Register</title>
</head>
<body>
 
 <?php
    include 'controller/connectdb.php';
    $strSQL = "SELECT * FROM register_present";
    $result = mysqli_query($dbcon,$strSQL);
    ?>

<table align="center" border="1" width="80%" bgcolor="#FFFF99">
	<tr>
			<td>ลำดับ</td>
			<td>ชื่อ-สกุล</td>
			<td>E-mail</td>
			<td>สถานะ</td>
			<td>มหาลัย/สถาบัน</td>
			<td>ประเภทการเข้าร่วม</td>
			<td>ประเภทบทความ</td>
			<td>ไฟล์ Word</td>
			<td>ไฟล์ PDF</td>
			<td>สถานะการจ่ายเงิน</td>
			<td>Review Paper</td>
			<td>แก้ไขข้อมูล</td>
			<td>ลบข้อมูล</td>
	</tr>




 <?php while ( $row = mysqli_fetch_array($result)) { ?>
	<tr>
			<td><?php echo "".$row['id'].""; ?></td>
			<td><?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?></td>
			<td><?php echo "".$row['email'].""; ?></td>
			<td><?php echo "".$row['status'].""; ?></td>
			<td><?php echo "".$row['university'].""; ?></td>
			<td><?php echo "".$row['type_register'].""; ?></td>	
			<td><?php echo "".$row['type_present'].""; ?></td>
			<td><a href="upload/file_word/<?php echo "".$row['file_word'].""; ?>" target="_blank">
				<img src="img/Word.png" border="0" style="width:100%"></a> </td>
			
			<td><a href="upload/file_pdf/<?php echo "".$row['file_pdf'].""; ?>" target="_blank">
				<img src="img/PDF.png" border="0" style="width:50%"></a></td>
			
			<td><a href="upload/payment/<?php echo "".$row['payment'].""; ?>" target="_blank">
				<img src="upload/payment/<?php echo "".$row['payment'].""; ?>" style="width:60%"></a></td>
			
			<td><img src="img/<?php echo "".$row['review'].""; ?>.png" style="width:40%"></td>
			
			<td><button type="button" onclick="return confirm('ต้องการแก้ไข <?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?> ???')" class="btn bg-red btn-xs waves-effect"><a href="Edit_Present.php?ID=<?php echo $row["id"];?>" ><i class="material-icons">Edit</i></a></button></td>
           
            <td><button type="button" onclick="return confirm('ต้องการลบ <?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?> ???')" class="btn bg-red btn-xs waves-effect"><a href="Delete.php?ID=<?php echo $row["id"];?>" ><i class="material-icons">Delete</i></a></button></td>
	</tr>

<?php
}
?>	
		

</table>
 <button type="button" onclick="window.location.href='register3u.php'" >กลับหน้าลงทะเบียน3u</button>
 <button type="button" onclick="window.location.href='register.php'" >กลับหน้าลงทะเบียน</button>
 <button type="button" onclick="window.location.href='Login_SyS/Logout.php'" >ออกจากระบบ</button>
</body>
</html>