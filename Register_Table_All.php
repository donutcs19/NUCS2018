<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>รายชื่อผู้เข้าร่วมทั้งหมด</title>
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
  
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" style="font-family: 'Pridi', serif;" >การประชุมวิชาการระดับปริญญาตรี สาขาวิชาสถิติ ระดับชาติ (The National Undergraduate 
            Conference on Statistics)</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="img/mju.gif" width="50">
              <img src="img/crmu.png" width="80">
              <img src="img/cmu.png" width="50">
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                       
                    </li>
                     <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>กลับหน้าหลัก</span>
                        </a>
                    </li>
                   <!--  <li>
                        <a href="Register_Participant.php">
                            <i class="material-icons">text_fields</i>
                            <span>ลงทะเบียนผู้เข้าร่วม</span>
                        </a>
                    </li>
                    <li>
                        <a href="Register_Present.php">
                            <i class="material-icons">text_fields</i>
                            <span>ลงทะเบียนผู้นำเสนอผลงาน</span>
                        </a>
                    </li>
                    <li>
                        <a href="Register3univer.php">
                            <i class="material-icons">text_fields</i>
                            <span>ลงทะเบียน (สถาบันเจ้าภาพ)</span>
                        </a>
                    </li> -->
                 </ul>
            </div>
            <!-- #Menu -->
        </aside>

        <!-- #END# Left Sidebar -->
       
    </section>

    <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                รายชื่อผู้นำเสนอทั้งหมด (สามารถค้นหาได้จากช่อง Search) <br><br>
                                <h5><font color="green">
                                เข้าร่วมฟังบรรยายพิเศษ วันที่ 13 มีนาคม 2561 เวลา 08.30-12.00 น<br><br>                               
                                หัวข้อที่ 1) ไม่ประสงค์เข้าร่วม<br>
                                หัวข้อที่ 2) การประมาณขนาดประชากรด้วยเทคนิค Capture-Recapture (Estimation population size based upon Capture-Recapture technique)<br>
                                หัวข้อที่ 3) การวิเคราะห์ข้อมูลเชิงนับ (Count Data Analysis)<br>
                                หัวข้อที่ 4) สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม (Generalized Estimating Equation with Count Data)
                            </font></h5> 
                            </h2>
                           
                        </div>

                        <?php
    include 'controller/connectdb.php';
    $strSQL = "SELECT * FROM register_present WHERE type_register = 'นำเสนอบรรยาย' OR type_register = 'นำเสนอโปสเตอร์'  ";
    $result = mysqli_query($dbcon,$strSQL);
    ?>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <!-- <th width="10">ลำดับ</th> -->
                                            <th width="200">ชื่อ-นามสกุล</th>
                                            <th width="10">สถานะ</th>
                                            <th width="160">มหาลัย/สถาบัน</th>
                                            <th width="80">ประเภท<br>การเข้าร่วม</th> 
                                            <th width="10">ผลการรีวิว</th>
                                            <th width="30">สถานะการจ่ายเงิน</th>
                                            <th width="70">เข้าร่วมฟังบรรยายพิเศษ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                        <tr>
                                            <!-- <th>ลำดับ</th> -->
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>สถานะ</th>
                                            <th>มหาลัย/สถาบัน</th>
                                            <th>ประเภทการเข้าร่วม</th>
                                            <th>ผลการรีวิว</th>
                                            <th>สถานะการจ่ายเงิน</th>
                                            <th>เข้าร่วมฟังบรรยายพิเศษ</th>  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       

                        <?php while ( $row = mysqli_fetch_array($result)) {?>

                                        <tr>
                                            <!-- <td><?php echo "".$row['id'].""; ?></td> -->
                                            <td><?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?></td>
                                            <td><?php echo "".$row['status'].""; ?></td>
                                            <td><?php echo "".$row['university'].""; ?></td>
                                            <td><?php echo "".$row['type_register'].""; ?></td>
                                            <td align="center">
                                        <?php if($row['review'] == 'pass'){ ?><img src="img/pass.png" style="width:40%">
                                        <?php }else if($row['review'] == 'fail'){ ?> <img src="img/fail.png" style="width:40%"> 
                                        <?php } else { ?> <img src="img/wait.png" style="width:40%"> <?php }?></td>    
                                        <td align="center"><?php if($row['payment'] !== '' && $row['payment'] !== null){ ?>
              <a href="upload/payment/<?php echo "".$row['payment'].""; ?>" target="_blank">
                <img src="img/pass.png" style="width:33%"></a>
                <?php }else if($row['university'] == 'มหาวิทยาลัยแม่โจ้'){ ?> <img src="img/mju.gif" style="width:33%"> 
                <?php }else if($row['university'] == 'มหาวิทยาลัยราชภัฏเชียงใหม่'){ ?> <img src="img/crmu.png" style="width:43%">
                <?php }else if($row['university'] == 'มหาวิทยาลัยเชียงใหม่'){ ?> <img src="img/cmu.png" style="width:33%">
                <?php }else{ ?><img src="img/fail.png" style="width:33%">   <?php }?></td>]
                <td align="center"><font color="green">หัวข้อที่ <?php echo "".$row['meeting'].""; ?></font></td>                                       
                                        </tr>
                                        
                                      <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
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