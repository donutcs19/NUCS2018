<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register</title>
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
                <a class="navbar-brand">REGISTER & Submit Paper</a>
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
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span style="font-family: 'Pridi', serif;">กลับหน้าหลัก</span>
                        </a>
                    </li>
                    <li class="active"></li>
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
                        <div class="header">
                            <h2>ลงทะเบียน</h2>
                           
                        </div>
                        <div class="body">
                            <form action="controller/registerdb.php" method="post" name="formregis" 
                            id="formregis" enctype="multipart/form-data" >
                                
                                <div class="col-md-3">
                                    <p>
                                        <b>คำนำหน้า</b>
                                    </p>
                                    <select name="frontname" class="form-control show-tick">
                                        <option value="นาย" selected>นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                </div><br><br><br><br>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="name" type="text" class="form-control"  maxlength="35" required>
                                        <label class="form-label">ชื่อ <font color="red">   **กรุณากรอกภาษาไทย</font></label>
                                    </div>
                                </div>
                              
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="surname" type="text" class="form-control" maxlength="50" required>
                                        <label class="form-label">นามสกุล <font color="red">   **กรุณากรอกภาษาไทย</font></label>
                                    </div>
                                </div>
                            

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="email" type="email"  maxlength="50" class="form-control" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                 
                                <div class="form-group">สถานะ :
                                    <input type="radio" name="status" value="นักศึกษา" required id="male" class="with-gap">
                                    <label for="male">นักศึกษา </label>

                                    <input type="radio" name="status" value="อาจารย์" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">อาจารย์ </label>
                                </div>
                               
                                  <div class="form-line">
                                    <p>
                                        <b>เข้าร่วมฟังบรรยายพิเศษ วันที่ 13 มีนาคม 2561 เวลา 08.30-12.00 น. (เลือกเพียง 1 หัวข้อที่สนใจ)</b>
                                    </p>
                                    <select name="meeting" class="form-control show-tick">
                                        <option value="1" selected>ไม่ประสงค์เข้าร่วม</option>
                                        <option value="2">การประมาณขนาดประชากรด้วยเทคนิค Capture-Recapture (Estimation population size based upon Capture-Recapture technique)</option>
                                        <option value="3">การวิเคราะห์ข้อมูลเชิงนับ (Count Data Analysis)</option>
                                        <option value="4">สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม (Generalized Estimating Equation with Count Data)</option>
                                    </select>
                                </div><br>

                                 <div class="col-md-3">
                                    <p>
                                        <b>มหาวิทยาลัย/สถาบัน</b>
                                    </p>
                                    <select name="univer" class="form-control show-tick">
                                         <option value="มหาวิทยาลัยแม่โจ้" selected>มหาวิทยาลัยแม่โจ้</option>
                                         <option value="มหาวิทยาลัยราชภัฏเชียงใหม่">มหาวิทยาลัยราชภัฏเชียงใหม่</option>
                                         <option value="มหาวิทยาลัยเชียงใหม่">มหาวิทยาลัยเชียงใหม่</option>
                                    </select>

                                </div>

                                 <div class="col-md-3">
                                    <p>
                                        <b>ประเภทการลงทะเบียน</b>
                                    </p>
                                    <select name="type_register" id="ddl" class="form-control show-tick">
                                        <option value="เข้าร่วม" selected>เข้าร่วม</option>
                                        <option value="นำเสนอบรรยาย">นำเสนอบรรยาย</option>
                                        <option value="นำเสนอโปสเตอร์">นำเสนอโปสเตอร์</option>
                                    </select>

                                </div><br><br><br><br><br>
                             <div id="box">
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="password" type="password" class="form-control" 
                                        onKeyPress="return KeyCode(password)" maxlength="12" >
                                        <label class="form-label">Password สำหรับเข้าสู่ระบบแก้ไขข้อมูล <font color="red">   **กรุณากรอกภาษาอังกฤษหรือตัวเลขไม่เกิน12ตัวอักษรเท่านั้น</font></label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <p>
                                        <b>ประเภทบทความ</b>
                                    </p>
                                    <select name="article" id="ddl2" class="form-control show-tick">
                                        <option value="" selected></option>
                                        <option value="บทคัดย่อ">บทคัดย่อ</option>
                                        <option value="บทคัดย่อและบทความฉบับเต็ม">บทคัดย่อและบทความฉบับเต็ม</option>
                            </select><font color="red">**เฉพาะผู้ต้องการส่งบทความเท่านั้น</font>
                                </div><br><br><br><br><br><br>
                                
                                
                            <div><font color="red">บทคัดย่อ รูปแบบไฟล์ MS Word (.doc || .docx)
                            <input class="btn bg-green btn-block btn-lg waves-effect"
                            name="file-word" type="file" id="file-word" accept="application/msword, .docx" >
                            **เฉพาะผู้ต้องการส่งบทความเท่านั้น</font></div><br>

                            <div><font color="red">บทคัดย่อ รูปแบบไฟล์ PDF (.pdf)
                            <input class="btn bg-green btn-block btn-lg waves-effect"
                            name="file-pdf" type="file" id="file-pdf" accept="application/pdf" >
                            **เฉพาะผู้ต้องการส่งบทความเท่านั้น</font></div><br><br>

                             <div id="box2">
                            <div><font color="red">บทความฉบับเต็ม รูปแบบไฟล์ MS Word (.doc || .docx)
                            <input class="btn bg-green btn-block btn-lg waves-effect"
                            name="file-word2" type="file" id="file-word" accept="application/msword, .docx" >**เฉพาะผู้ต้องการส่งบทความเท่านั้น</font></div><br><br>

                            <div><font color="red">บทความฉบับเต็ม รูปแบบไฟล์ PDF (.pdf)
                            <input class="btn bg-green btn-block btn-lg waves-effect"
                            name="file-pdf2" type="file" id="file-pdf" accept="application/pdf" >
                            **เฉพาะผู้ต้องการส่งบทความเท่านั้น</font></div><br><br>
                            </div>
                        </div>            
                            <input type="hidden" name="payment" id="payment" value="-" > 
                            <input type="hidden" name="paper" value="wait">   
                               
                                <button class="btn btn-primary waves-effect" type="submit" name="upload" value="Submit">ลงทะเบียน</button>
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
    if(ddl == 'นำเสนอบรรยาย' || 'นำเสนอโปสเตอร์' ){
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
        $("#txt_box").val("").focus();
    }if(ddl2 == 'บทคัดย่อ'){
        $("#box2").hide();
        $("#txt_box").val("");
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