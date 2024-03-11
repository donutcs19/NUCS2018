<!DOCTYPE html>
<html>
<?php
        
        include 'controller/Session.php';
        
/*echo"<head><meta http-equiv='Refresh'content = '1; URL = Event_List.php'></head>";//ลิงค์หน่วงเวลา*/
?> 
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ข้อมูลผู้นำเสนอ</title>
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

    <!-- JQuery DataTable Css -->
    <link href="Templete/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="Templete/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="Templete/css/themes/all-themes.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pridi">
</head>

<body class="theme-red" style="font-family: 'Pridi', serif;">
    <!-- Page Loader -->

    <!-- Top Bar -->
       <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" >Admin</a>
            </div>
           
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               
                <div class="info-container">
                   
                </div>
            </div>
            <!-- Menu -->
             <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                     <li>
                        <a href="AdminP2.php">
                            <i class="material-icons">home</i>
                            <span style="font-family: 'Pridi', serif;">กลับรีวิว</span>
                        </a>
                    </li>
                     
                </ul> 
            </div>     
            <!-- #Footer -->
        </aside>
      
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>


<?php
    include 'controller/connectdb.php';
    
    $strSQL = "SELECT * FROM register_present WHERE id = '".$_GET["ID"]."' ";
    $result = mysqli_query($dbcon, $strSQL) or die ("Error Query [".$strSQL."]");
    $row = mysqli_fetch_array($result);
?>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ข้อมูลผู้นำเสนอ
                            </h2>
                           
                        </div><br><br>

                       
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspชื่อ-นามสกุล : 
            <font color="green"><?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?></font><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspสถานะ : 
            <font color="green"><?php echo "".$row['status'].""; ?></font><br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspอีเมลล์ : 
            <font color="green"><?php echo "".$row['email'].""; ?></font><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspมหาลัย/สถาบัน : 
            <font color="green"><?php echo "".$row['university'].""; ?></font><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspประเภทการลงทะเบียน : 
            <font color="green"><?php echo "".$row['type_register'].""; ?></font><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspประเภทบทควม : 
            <font color="green"><?php echo "".$row['type_present'].""; ?><br></font><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspเข้าร่วมฟังบรรยายพิเศษ วันที่ 13 มีนาคม 2561 เวลา 08.30-12.00 น. : <br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php 
            if($row['meeting'] == '1'){ ?><font color="green">ไม่ประสงค์เข้าร่วม</font>
            <?php }else if($row['meeting'] == '2'){ ?> <font color="green">
            การประมาณขนาดประชากรด้วยเทคนิค Capture-Recapture (Estimation population size based upon Capture-Recapture technique)</font>
            <?php }else if($row['meeting'] == '3'){ ?><font color="green">
            การวิเคราะห์ข้อมูลเชิงนับ (Count Data Analysis)</font>
            <?php }else if($row['meeting'] == '4'){ ?><font color="green">
            สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม (Generalized Estimating Equation with Count Data)</font>
            <?php }else{ ?><font color="red">ไม่ประสงค์เข้าร่วม </font>  <?php }?><br>


                     <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            
                                            <td width="80">Word บทคัดย่อ</td>
                                            <td width="80">PDF บทคัดย่อ</td>
                                            <td width="120">Word บทความฉบับเต็ม</td>
                                            <td width="80">PDF บทความฉบับเต็ม</td>
                                            <td width="60">สถานะการจ่ายเงิน</td>
                                            <td width="50">Review Paper</td>
                                            
                                        </tr>
                                    </thead>
                                    
                                            
            <tr align="center">
            <td><?php if($row['file_word'] !== '' && $row['file_word'] !== null){ ?>
               <a href="upload/file_word_บทคัดย่อ/<?php echo "".$row['file_word'].""; ?>" target="_blank">
                <img src="img/Word.png" border="0" style="width:65%"></a> <?php 
                }else{ ?><img src="img/nodoc.png" style="width:60%"> <?php }?></td>
            
            <td>  <?php if($row['file_pdf'] !== '' && $row['file_pdf'] !== null){ ?> 
                <a href="upload/file_pdf_บทคัดย่อ/<?php echo "".$row['file_pdf'].""; ?>" target="_blank">
                <img src="img/PDF.png" border="0" style="width:50%"></a><?php }
                else{ ?><img src="img/nodoc.png" style="width:80%">  <?php }?></td>

            <td> <?php if($row['file_word2'] !== '' && $row['file_word2'] !== null){ ?>
               <a href="upload/file_word_บทความฉบับเต็ม/<?php echo "".$row['file_word2'].""; ?>" target="_blank">
                <img src="img/Word.png" border="0" style="width:50%"></a> <?php 
                }else{ ?><img src="img/nodoc.png" style="width:60%">  <?php }?></td>
            
            <td> <?php if($row['file_pdf2'] !== '' && $row['file_pdf2'] !== null){ ?> 
                <a href="upload/file_pdf_บทความฉบับเต็ม/<?php echo "".$row['file_pdf2'].""; ?>" target="_blank">
                <img src="img/PDF.png" border="0" style="width:50%"></a><?php }
                else{ ?><img src="img/nodoc.png" style="width:80%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?></td>
            
             <td align="center"><?php if($row['payment'] !== '' && $row['payment'] !== null){ ?>
              <a href="upload/payment/<?php echo "".$row['payment'].""; ?>" target="_blank">
                <img src="upload/payment/<?php echo "".$row['payment'].""; ?>" style="width:60%"></a>
                <?php }else if($row['university'] == 'มหาวิทยาลัยแม่โจ้'){ ?> <img src="img/mju.gif" style="width:80%"> 
                <?php }else if($row['university'] == 'มหาวิทยาลัยราชภัฏเชียงใหม่'){ ?> <img src="img/crmu.png" style="width:100%">
                <?php }else if($row['university'] == 'มหาวิทยาลัยเชียงใหม่'){ ?> <img src="img/cmu.png" style="width:80%">
                <?php }else{ ?><font color="red">ยังไม่ได้ชำระเงิน </font>  <?php }?></td>

            <td><?php if($row['review'] == 'pass'){ ?><img src="img/pass.png" style="width:60%">
                <?php }else if($row['review'] == 'fail'){ ?> <img src="img/fail.png" style="width:60%"> 
                <?php }else if($row['type_register'] == 'เข้าร่วม' && $row['review'] == 'wait'){ ?> 
                <img src="img/pass.png" style="width:60%"> 
                <?php }else { ?> <img src="img/wait.png" style="width:60%"> <?php }?></td>
            
           

                                         </tr>   
                                    </tbody>
                                </table>
                            </div><br>
                            <form action="controller/Save_Review.php?ID=<?php echo $_GET["ID"];?>"    
                method="post" name="formregis" id="formregis" enctype="multipart/form-data" >
             ผลการรีวิว : 
                              <select name="paper" class="form-control show-tick" >
                                     <option value="<?php echo "".$row['review'].""; ?>" selected>
                                      <?php echo "".$row['review'].""; ?></option>
                                     <option value="wait">Wait</option>
                                     <option value="pass">Pass</option>
                                     <option value="fail">Fail</option>
                              </select> <br>
            <button type="submit" name="upload" class="btn btn-primary waves-effect" value="Submit">แก้ไขผลการรีวิว</button>
                          </form><br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
            <!-- #END# Exportable Table -->
                
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

    <!-- Waves Effect Plugin Js -->
    <script src="Templete/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="Templete/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="Templete/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="Templete/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="Templete/js/admin.js"></script>
    <script src="Templete/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="Templete/js/demo.js"></script>
</body>

</html>