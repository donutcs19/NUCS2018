<!DOCTYPE HTML>
<HTML>

<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
  <TITLE>Register</TITLE>


</HEAD>

<BODY>

   
                        
                 <form action="controller/registerdb.php" method="post" name="formregis" id="formregis" enctype="multipart/form-data" >
                        
                             
                        คำนำหน้า : 
                                     
                            <select name="frontname" id="frontname">
                                    <option value="นาย" selected>นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                            </select><br><br>
             
                        ชื่อ : 
                            <input name="name" type="text"   maxlength="35" required><br><br>

                        นามสกุล : 
                            <input name="surname" type="text"  maxlength="50" required><br><br>

                        E-mail : 
                            <input name="email" type="email"  maxlength="50" required><br><br> 
                              
                        สถานะ : 
                                   
                            <input type="radio" name="status" value="นักศึกษา" required>นักศึกษา
                            <input type="radio" name="status" value="อาจารย์">อาจารย์ <br><br>
                                      
                                     
                        มหาวิทยาลัย/สถาบัน : 
                            <select name="univer">
                                    <option value="มหาวิทยาลัยแม่โจ้" selected>มหาวิทยาลัยแม่โจ้</option>
                                    <option value="มหาวิทยาลัยราชภัฏเชียงใหม่">มหาวิทยาลัยราชภัฏเชียงใหม่</option>
                                    <option value="มหาวิทยาลัยเชียงใหม่">มหาวิทยาลัยเชียงใหม่</option>
                            </select><br><br>
                                        
                        ประเภทการลงทะเบียน : 
                            <select name="type_register">
                                    <option value="เข้าร่วม" selected>เข้าร่วม</option>
                                    <option value="นำเสนอบรรยาย">นำเสนอบรรยาย</option>
                                    <option value="นำเสนอโปสเตอร์">นำเสนอโปสเตอร์</option>
                            </select><br><br>

                       

                        ประเภทบทความ :  
                                   
                            <select name="article">
                                    <option value="-" selected>-</option>
                                    <option value="บทคัดย่อ">บทคัดย่อ</option>
                                    <option value="บทความฉบับเต็ม">บทความฉบับเต็ม</option>
                            </select>**เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น<br><br>  

                        รูปแบบไฟล์ MS Word<br>(.doc || .docx) 
                                    
                            <input name="file-word" type="file" id="file-word" accept="application/msword, .docx" >**เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น<br><br> 

                        รูปแบบไฟล์ PDF<br>(.pdf) 
                                    
                            <input name="file-pdf" type="file" id="file-pdf" accept="application/pdf">
                            **เฉพาะผู้ต้องการส่งบทคัดย่อเท่านั้น<br><br>  

                            <input type="hidden" name="payment" id="payment" value="-" > 

                            <input type="hidden" name="paper" value="wait">

                        <button type="submit" name="upload" value="Submit" >ลงทะเบียน</button> 
                        <button type="button" onclick="window.location.href='index.php'" >กลับหน้าหลัก</button>        
                 </form>  
                        
                        
                       
</BODY>

</HTML>

                                      
                                     
                     
                                        
                  