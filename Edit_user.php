<!DOCTYPE html>
<html>
<?php
        
        include 'controller/Session_user.php';
        
/*echo"<head><meta http-equiv='Refresh'content = '1; URL = Event_List.php'></head>";//ลิงค์หน่วงเวลา*/
?> 
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Present</title>
    <!-- Favicon-->
   <link rel="icon" href="Stat_Html/favicon.ico" type="image/x-icon"> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="Templete/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="Templete/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="Templete/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="Templete/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="Templete/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="Templete/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="Templete/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="Templete/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="Templete/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="Templete/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="Templete/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="Templete/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="Templete/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="Templete/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="Templete/css/themes/all-themes.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pridi">
</head>

<body class="theme-red" style="font-family: 'Pridi', serif;">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   
       <nav class="navbar">

 

        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" style="font-family: 'Pridi', serif;">EDIT Present  
                   
                 </a>
            </div>
           
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
             <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                  
                </div>
                
            </div>
            <!-- #User Info -->
            <!-- Menu -->
             <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    
                        <a href="User.php">
                            <i class="material-icons">home</i>
                            <span style="font-family: 'Pridi', serif;">กลับหน้าหลัก</span>
                        </a>
                    </li>
                    <li class="active">
                </ul> 
            </div>     
            <!-- #Footer -->
        </aside>
      
        <!-- #END# Left Sidebar -->
    
    </section>

    <section class="content" >
        <div class="container-fluid">
           
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <?php
    include 'controller/connectdb.php';
    
    $strSQL = "SELECT * FROM register_present WHERE id = '".$_GET["ID"]."' ";
    $result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");
    $row = mysqli_fetch_array($result);
?>
                        <div class="header">
                            <h2>แก้ไขข้อมูล ID : <?php echo "".$row['id'].""; ?> </h2>
                           
                        </div>
                        <div class="body">

            
                            <form action="controller/Save_Edit_User.php?ID=<?php echo $_GET["ID"];?>" method="post" name="formregis" id="formregis" enctype="multipart/form-data" >
                                
                                <div class="col-md-3">
                                    <p>
                                        <b>คำนำหน้า</b>
                                    </p>
                                    <select name="frontname" class="form-control show-tick">
                                        <option value="<?php echo "".$row['fontname'].""; ?>" selected>
                                            <?php echo "".$row['fontname'].""; ?></option>
                                        <option value="นาย" >นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                </div><br><br><br><br>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="name" type="text" class="form-control" 
                                        value="<?php echo "".$row['name'].""; ?>" maxlength="35" required>
                                        <label class="form-label">ชื่อ</label>
                                    </div>
                                </div>
                              
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="surname" type="text" class="form-control"
                                         value="<?php echo "".$row['sname'].""; ?>" maxlength="50" required>
                                        <label class="form-label">นามสกุล</label>
                                    </div>
                                </div>

                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="password" type="text" class="form-control" 
                                        value="<?php echo "".$row['password'].""; ?>" maxlength="12" 
                                        onKeyPress="return KeyCode(password)" required >
                                        <label class="form-label" >
                                        Password สำหรับเข้าสู่ระบบแก้ไขข้อมูล **ไม่เกิน12ตัวอักษร</label>
                                    </div>
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="email" type="email"  maxlength="50" 
                                        value="<?php echo "".$row['email'].""; ?>" class="form-control" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                 
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="univer" type="text"  maxlength="50" 
                                       value="<?php echo "".$row['university'].""; ?>" class="form-control" required>
                                        <label class="form-label">มหาวิทยาลัย/สถาบัน</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <p>
                                        <b>สถานะ</b>
                                    </p>
                                    <select name="status" class="form-control show-tick">
                                        <option value="<?php echo "".$row['status'].""; ?>" selected>
                                        <?php echo "".$row['status'].""; ?></option>
                                        
                                       
                                    </select>

                                </div>
                                 <div class="col-md-3">
                                    <p>
                                        <b>ประเภทการลงทะเบียน</b>
                                    </p>
                                    <select name="type_register" id="ddl" class="form-control show-tick">
                                        <option  selected value="<?php echo "".$row['type_register'].""; ?>" >
                                        <?php echo "".$row['type_register'].""; ?></option>
                                        <option value="เข้าร่วม">เข้าร่วม</option>
                                        <option value="นำเสนอบรรยาย">นำเสนอบรรยาย</option>
                                        <option value="นำเสนอโปสเตอร์">นำเสนอโปสเตอร์</option>
                                    </select>
                                    <font color="red">กรุณาคลิกเลือกประเภทของท่าน</font> 
                                </div>
                        

                        <div id="box">  
                                <div class="col-md-3">
                                    <p>
                                        <b>ประเภทบทความ</b>
                                    </p>
                                    <select name="article" id="ddl2" class="form-control show-tick">
                                        <option selected value="<?php echo "".$row['type_present'].""; ?>" >
                                        <?php echo "".$row['type_present'].""; ?></option>
                                        <option value="บทคัดย่อ">บทคัดย่อ</option>
                                        <option value="บทคัดย่อและบทความฉบับเต็ม">บทคัดย่อและบทความฉบับเต็ม</option>
                                    </select>
                                    <font color="red">กรุณาคลิกเลือกประเภทของท่าน</font>
                                </div><br><br><br><br><br><br>
                                
                            <font color="red">ชื่อไฟล์ควรเป็นชื่อ_นามสกุลภาษาอังกฤษ เช่น Wanchai_Kumporn_doc // Wanchai_Kumporn_pdf</font>
                            <br><br>
                            <div>
                            <?php if($s_file_word !== '' && $s_file_word !== null){ ?>
                            <a href="upload/file_word_บทคัดย่อ/<?php echo "$s_file_word"; ?>" target="_blank">
                            <img src="img/Word.png" border="0" style="width:5%"></a> <?php 
                            }else{ ?><img src="img/nodoc.png" style="width:5%"> <?php }?>
                            
                            <font color="red">บทคัดย่อ รูปแบบไฟล์ MS Word (.doc || .docx)
                            <input class="btn bg-green btn-block btn-lg waves-effect" id="txt_box" 
                            name="file-word" type="file" id="file-word" accept="application/msword, .docx"></font></div><br>
                          
                            <input type="hidden" name="hdnOldFile" value="<?php echo $row["file_word"];?>">

                            <div>
                            <?php if($s_file_pdf !== '' && $s_file_pdf !== null){ ?> 
                            <a href="upload/file_pdf_บทคัดย่อ/<?php echo "$s_file_pdf"; ?>" target="_blank">
                            <img src="img/PDF.png" border="0" style="width:5%"></a><?php }
                            else{ ?><img src="img/nodoc.png" style="width:5%">  <?php }?>

                            <font color="red">บทคัดย่อ รูปแบบไฟล์ PDF (.pdf)
                            <input class="btn bg-green btn-block btn-lg waves-effect" id="txt_box"
                            name="file-pdf" type="file" id="file-pdf" accept="application/pdf" >
                            </font></div><br><br>
                            <input type="hidden" name="hdnOldFile2" value="<?php echo $row["file_pdf"];?>">

                        <div id="box2">
                            <div>
                            <?php if($s_file_word2 !== '' && $s_file_word2 !== null){ ?>
                            <a href="upload/file_word_บทความฉบับเต็ม/<?php echo "$s_file_word2"; ?>" target="_blank">
                            <img src="img/Word.png" border="0" style="width:5%"></a> <?php 
                            }else{ ?><img src="img/nodoc.png" style="width:5%">  <?php }?>

                            <font color="red">บทความฉบับเต็ม รูปแบบไฟล์ MS Word (.doc || .docx)
                            <input class="btn bg-green btn-block btn-lg waves-effect" id="txt_box2"
                            name="file-word2" type="file" id="file-word" accept="application/msword, .docx"></font></div><br>
                            
                            <input type="hidden" name="hdnOldFile3" value="<?php echo $row["file_word"];?>">

                            <div>
                            <?php if($s_file_pdf2 !== '' && $s_file_pdf2 !== null){ ?> 
                            <a href="upload/file_pdf_บทความฉบับเต็ม/<?php echo "$s_file_pdf2"; ?>" target="_blank">
                            <img src="img/PDF.png" border="0" style="width:5%"></a><?php }
                            else{ ?><img src="img/nodoc.png" style="width:5%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?>
                            
                            <font color="red">บทความฉบับเต็ม รูปแบบไฟล์ PDF (.pdf)
                            <input class="btn bg-green btn-block btn-lg waves-effect" id="txt_box2"
                            name="file-pdf2" type="file" id="file-pdf" accept="application/pdf" >
                            </font></div><br><br>
                            <input type="hidden" name="hdnOldFile4" value="<?php echo $row["file_pdf"];?>">
                        </div>        
                    </div> 
                               
                                 ผลการรีวิว : 
                            <?php if($s_review == 'pass'){ ?><img src="img/pass.png" style="width:10%">
                            <?php }else if($s_review == 'fail'){ ?> <img src="img/fail.png" style="width:10%"> 
                            <?php }else if($s_type_register == 'เข้าร่วม' && $s_review == 'wait'){ ?> 
                            <img src="img/pass.png" style="width:10%"> 
                            <?php }else { ?> <img src="img/wait.png" style="width:10%"> <?php }?> <br><br>

                                 เข้าร่วมฟังบรรยายพิเศษ วันที่ 13 มีนาคม 2561 เวลา 08.30-12.00 น. (เลือกเพียง 1 หัวข้อที่สนใจ) : 
                              <select name="meeting" class="form-control show-tick" >
                                    <option value="<?php echo "".$row['meeting'].""; ?>" selected>
                                      หัวข้อที่สนใจก่อนหน้า หัวข้อที่ <?php echo "".$row['meeting'].""; ?></option>
                                    <option value="1">1.ไม่ประสงค์เข้าร่วม</option>
                                    <option value="2">2.การประมาณขนาดประชากรด้วยเทคนิค Capture-Recapture 
                                    (Estimation population size based upon Capture-Recapture technique)</option>
                                    <option value="3">3.การวิเคราะห์ข้อมูลเชิงนับ (Count Data Analysis)</option>
                                    <option value="4">4.สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม 
                                    (Generalized Estimating Equation with Count Data)</option>
                              </select> <br><br>

                            หลักฐานการจ่ายเงิน<br><br>
                            <?php if($s_payment !== '' && $s_payment !== null){ ?>
                            <a href="upload/payment/<?php echo "$s_payment"; ?>" target="_blank">
                            <img src="upload/payment/<?php echo "$s_payment"; ?>" style="width:20%"></a>
                            <?php }else{ ?><font color="red">ยังไม่ไม่ได้ชำระเงิน </font>  <?php }?><br><br>

                            <div>แนบหลักฐานการจ่ายเงิน
                            <input class="btn bg-blue btn-block btn-lg waves-effect"
                           name="payment" type="file"  accept="image/jpeg, image/png">
                            <font color="red">**(.jpg หรือ .png ขนาดไฟล์ไม่เกิน 500K เท่านั้น)</font></div><br><br>
                            <input type="hidden" name="hdnOldFile5" value="<?php echo $row["payment"];?>">

                         <button type="submit" name="upload" class="btn btn-primary waves-effect" value="Submit">แก้ไขข้อมูล</button> 
                       
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="Templete/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="Templete/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="Templete/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="Templete/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="Templete/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="Templete/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="Templete/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="Templete/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="Templete/js/admin.js"></script>
    <script src="Templete/js/pages/forms/form-validation.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="Templete/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="Templete/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="Templete/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="Templete/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="Templete/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="Templete/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="Templete/plugins/nouislider/nouislider.js"></script>

    <!-- Demo Js -->
    <script src="Templete/js/demo.js"></script>

     <script type="text/javascript">
$(document).ready(function(){

$("#box").hide();

$("#ddl").change(function(){
    var ddl = $("#ddl").val();
    if(ddl == 'นำเสนอบรรยาย'){
        $("#box").show();
        $("#txt_box").val("").focus();

    }if(ddl == 'นำเสนอโปสเตอร์'){
        $("#box").show();
        $("#txt_box").val("").focus();

    }if(ddl == 'เข้าร่วม'){
        $("#box").hide();
        $("#txt_box").val("");
    }
    
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){

$("#box2").hide();

$("#ddl2").change(function(){
    var ddl2 = $("#ddl2").val();
    if(ddl2 == 'บทคัดย่อและบทความฉบับเต็ม'){
        $("#box2").show();
        $("#txt_box2").val("").focus();

    }if(ddl2 == 'บทคัดย่อ'){
        $("#box2").hide();
        $("#txt_box2").val("");
    }
    
});

});

</script>

<script type="text/javascript">
    function KeyCode(objId)
    {
        if (event.keyCode >= 48 && event.keyCode<=57 || event.keyCode>=97 && event.keyCode<=122) //48-57(ตัวเลข) ,65-90(Eng ตัวพิมพ์ใหญ่ ) ,97-122(Eng ตัวพิมพ์เล็ก)
        {
            return true;
        }
        else
        {
            alert("กรอกได้เฉพาะ a-z และ 0-9");
            return false;
        }
    }
</script>

</body>

</html>