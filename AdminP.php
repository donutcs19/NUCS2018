<!DOCTYPE html>
<html>
<?php
        
        include 'controller/Session.php';
        
/*echo"<head><meta http-equiv='Refresh'content = '1; URL = Event_List.php'></head>";//ลิงค์หน่วงเวลา*/
?> 
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

    <!-- Top Bar -->
       <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
           
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                    style="font-family: 'Pridi', serif;">ออกจากระบบ>>>>>>>>></div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="Login_SyS/Logout.php"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Menu -->
             <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                     <li>
                        <a href="AdminP.php">
                            <i class="material-icons">home</i>
                            <span style="font-family: 'Pridi', serif;">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="AdminP2.php">
                            <i class="material-icons">insert_comment</i>
                            <span style="font-family: 'Pridi', serif;">รีวิว Paper</span>
                        </a>
                    </li>
                    <li>
                        <a href="EditPresent.php">
                            <i class="material-icons">insert_comment</i>
                            <span style="font-family: 'Pridi', serif;">แก้ไขข้อมูล</span>
                        </a>
                    </li>
                    <li class="active">
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
    $strSQL = "SELECT * FROM register_present";
    $result = mysqli_query($dbcon,$strSQL);
    ?>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                รายชื่อผู้เข้าร่วมทั้งหมด (ไม่สามารถเซฟเป็น PDF ได้)
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <td width="2">ลำดับ</td>
                                            <td width="250">ชื่อ-สกุล</td>
                                            <td width="150">E-mail</td>
                                            <td width="10">สถานะ</td>
                                            <td width="150">มหาลัย/สถาบัน</td>
                                            <td width="10">การเข้าร่วม</td>
                                            <td width="10">บทความ</td>

                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php while ( $row = mysqli_fetch_array($result)) { ?>
                                        <tr>
            <td><?php echo "".$row['id'].""; ?></td>
            <td><?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?></td>
            <td><?php echo "".$row['email'].""; ?></td>
            <td><?php echo "".$row['status'].""; ?></td>
            <td><?php echo "".$row['university'].""; ?></td>
            <td><?php echo "".$row['type_register'].""; ?></td> 
            <td><?php echo "".$row['type_present'].""; ?></td>
            
           
            
            
                                        </tr>
                                       
                                       
<?php
}
?>  

                                    </tbody>
                                </table>
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