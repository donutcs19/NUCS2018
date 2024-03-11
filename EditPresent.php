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
                <a class="navbar-brand" ></a>
            </div>
           
    </nav><br><br><br><br><br>
 
        <div class="container-fluid">
         

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                รายชื่อผู้เข้าร่วมทั้งหมด 
        <button type="button" class="btn btn-primary waves-effect" onclick="window.location.href='AdminP.php'">กลับหน้าหลัก</button>
                            </h2>

                           <?php
    include 'controller/connectdb.php';
    $strSQL = "SELECT * FROM register_present";
    $result = mysqli_query($dbcon,$strSQL);
    ?>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <td>ลำดับ</td>
                                            <td>ชื่อ-สกุล</td>
                                            <td>E-mail</td>
                                            <td>สถานะ</td>
                                            <td>มหาลัย/สถาบัน</td>
                                            <td>ประเภทการเข้าร่วม</td>
                                            <td>ประเภทบทความ</td>
                                            <td>Word บทคัดย่อ</td>
                                            <td>PDF บทคัดย่อ</td>
                                            <td>Word บทความฉบับเต็ม</td>
                                            <td>PDF บทความฉบับเต็ม</td>
                                            <td>สถานะการจ่ายเงิน</td>
                                            <td>Review Paper</td>
                                            <td>แก้ไขข้อมูล</td>
                                            <td>ลบข้อมูล</td>
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
            
            <td><?php if($row['file_word'] !== '' && $row['file_word'] !== null){ ?>
               <a href="upload/file_word_บทคัดย่อ/<?php echo "".$row['file_word'].""; ?>" target="_blank">
                <img src="img/Word.png" border="0" style="width:60%"></a> <?php 
                }else{ ?><img src="img/nodoc.png" style="width:60%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?></td>
            
            <td><?php if($row['file_pdf'] !== '' && $row['file_pdf'] !== null){ ?> 
                <a href="upload/file_pdf_บทคัดย่อ/<?php echo "".$row['file_pdf'].""; ?>" target="_blank">
                <img src="img/PDF.png" border="0" style="width:60%"></a><?php }
                else{ ?><img src="img/nodoc.png" style="width:60%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?></td>

            <td><?php if($row['file_word2'] !== '' && $row['file_word2'] !== null){ ?>
               <a href="upload/file_word_บทความฉบับเต็ม/<?php echo "".$row['file_word2'].""; ?>" target="_blank">
                <img src="img/Word.png" border="0" style="width:60%"></a> <?php 
                }else{ ?><img src="img/nodoc.png" style="width:60%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?></td>
            
            <td><?php if($row['file_pdf2'] !== '' && $row['file_pdf2'] !== null){ ?> 
                <a href="upload/file_pdf_บทความฉบับเต็ม/<?php echo "".$row['file_pdf2'].""; ?>" target="_blank">
                <img src="img/PDF.png" border="0" style="width:60%"></a><?php }
                else{ ?><img src="img/nodoc.png" style="width:60%"> <!-- <font color="red">ไม่ส่ง </font> --> <?php }?></td>
            
             <td align="center"><?php if($row['payment'] !== '' && $row['payment'] !== null){ ?>
              <a href="upload/payment/<?php echo "".$row['payment'].""; ?>" target="_blank">
                <img src="upload/payment/<?php echo "".$row['payment'].""; ?>" style="width:60%"></a>
                <?php }else if($row['university'] == 'มหาวิทยาลัยแม่โจ้'){ ?> <img src="img/mju.gif" style="width:80%"> 
                <?php }else if($row['university'] == 'มหาวิทยาลัยราชภัฏเชียงใหม่'){ ?> <img src="img/crmu.png" style="width:100%">
                <?php }else if($row['university'] == 'มหาวิทยาลัยเชียงใหม่'){ ?> <img src="img/cmu.png" style="width:80%">
                <?php }else{ ?><font color="red">ยังไม่ชำระเงิน </font>  <?php }?></td>

            <td><?php if($row['review'] == 'pass'){ ?><img src="img/pass.png" style="width:70%">
                <?php }else if($row['review'] == 'fail'){ ?> <img src="img/fail.png" style="width:70%"> 
                <?php }else if($row['type_register'] == 'เข้าร่วม' && $row['review'] == 'wait'){ ?> 
                <img src="img/pass.png" style="width:70%"> 
                <?php }else { ?> <img src="img/wait.png" style="width:70%"> <?php }?></td>
            
            <td><button type="button" onclick="return confirm('ต้องการแก้ไข <?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?> ???')" class="btn bg-amber btn-xs waves-effect"><a href="Edit.php?ID=<?php echo $row["id"];?>" ><i class="material-icons">mode_edit</i></a></button></td>

            <td><button type="button" onclick="return confirm('ต้องการลบ <?php echo "".$row['fontname']." ".$row['name']." ".$row['sname'].""; ?> ???')" class="btn bg-red btn-xs waves-effect"><a href="controller/Delete.php?ID=<?php echo $row["id"]; ?>" ><i class="material-icons">delete_forever</i></a></button></td>
    </tr>
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