<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
	<TITLE>Register</TITLE>


</HEAD>

<BODY>

   <?php
    include 'controller/connectdb.php';
    
    $strSQL = "SELECT * FROM register_present WHERE id = '".$_GET["ID"]."' ";
    $result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");
    $row = mysqli_fetch_array($result);
?>
                        
                 <form action="controller/Save_Edit_Present.php?ID=<?php echo $_GET["ID"];?>" method="post" name="formregis" id="formregis" enctype="multipart/form-data" >
                      
                        ID : <?php echo $row["id"];?> <br><br> 
                             
                        คำนำหน้า : 
                                     
                             <select name="frontname" id="frontname">
                                     <option value="<?php echo "".$row['fontname'].""; ?>">
                                     <?php echo "".$row['fontname'].""; ?></option>
                                     <option value="นาย">นาย</option>
                                     <option value="นาง">นาง</option>
                                     <option value="นางสาว">นางสาว</option>
                             </select> <br><br>
             
                        ชื่อ : 
                             <input name="name" type="text" id="name2"  maxlength="35" required
                             value="<?php echo "".$row['name'].""; ?>"><br><br>

                        นามสกุล : 
                             <input name="surname" type="text" id="name2" maxlength="50" required
                             value="<?php echo "".$row['sname'].""; ?>"><br><br>

                        E-mail : 
                            <input name="email" type="email" id="email" maxlength="50" required
                            value="<?php echo "".$row['email'].""; ?>"><br><br> 
                              
                        สถานะ : <?php echo $row["status"];?> 
                                   
                              <input type="radio" name="status" value="นักศึกษา">นักศึกษา
                              <input type="radio" name="status" value="อาจารย์">อาจารย์ 
                              <input type="hidden" name="status" value="<?php echo $row["status"];?>"><br><br>
                                      
                                     
                        มหาวิทยาลัย/สถาบัน : 
                              <input name="univer" type="text" id="name2"  maxlength="50" required
                              value="<?php echo "".$row['university'].""; ?>"><br><br>
                                        
                        ประเภทการลงทะเบียน : 
                              <select name="type_register">
                                     <option value="<?php echo "".$row['type_register'].""; ?>">
                                      <?php echo "".$row['type_register'].""; ?></option>
                                     <option value="เข้าร่วม">เข้าร่วม</option>
                                     <option value="นำเสนอบรรยาย">นำเสนอบรรยาย</option>
                                     <option value="นำเสนอโปสเตอร์">นำเสนอโปสเตอร์</option>
                              </select> <br><br>

                        ประเภทบทความ : 
                                  
                               <select name="article" >
                                     <option value="<?php echo "".$row['type_present'].""; ?>">
                                      <?php echo "".$row['type_present'].""; ?></option>
                                     <option value="-">-</option>
                                     <option value="บทคัดย่อ">บทคัดย่อ</option>
                                     <option value="บทความฉบับเต็ม">บทความฉบับเต็ม</option>
                              </select> &nbsp;&nbsp;&nbsp;&nbsp;**เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น <br><br>     
                              
                        รูปแบบไฟล์ MS Word<br>(.doc || .docx) 
                                    
                              <input name="file-word" type="file" id="file-word" accept="application/msword, .docx" >**เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น<br><br>
                              <input type="hidden" name="hdnOldFile" value="<?php echo $row["file_word"];?>"> 

                        รูปแบบไฟล์ PDF<br>(.pdf) 
                                    
                              <input name="file-pdf" type="file" id="file-pdf" accept="application/pdf" >**เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น<br><br>  
                              <input type="hidden" name="hdnOldFile2" value="<?php echo $row["file_pdf"];?>">

                        
                         ผลการรีวิว : 
                              <select name="paper" >
                                     <option value="<?php echo "".$row['review'].""; ?>">
                                      <?php echo "".$row['review'].""; ?></option>
                                     <option value="wait">Wait</option>
                                     <option value="pass">Pass</option>
                                     <option value="fail">Fail</option>
                              </select> <br><br>
                        <button type="submit" name="upload" value="Submit">แก้ไขข้อมูล</button> 
                        <button type="button" onclick="window.location.href='Admin.php'" >กลับหน้าหลัก</button>        
                 </form> 	
                        
                        
                       
</BODY>

</HTML>
