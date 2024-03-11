<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Fail</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

       
        <!-- Favicon and touch icons -->
       <link rel="icon" href="../Stat_Html/favicon.ico" type="image/x-icon"> 

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top"><br>
                                 <div  align="center">
                                    <img src="assets/img/admin.png" style="width:50%">
                                </div>
                                
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="check_login_user.php" method="post" class="login-form">
                                   <div class="form-group">
                                        <label class="sr-only" for="form-username">ชื่อ</label>
                                        <input  type="text" name="name" placeholder="ชื่อ..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">นามสกุล</label>
                                        <input type="text" name="sname" placeholder="นามสกุล..." class="form-username form-control" id="form-username2">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Login!</button>
                                    <br><br>
                                    <center>
                                    <a class="btn btn-link-1 btn-link-1-twitter" >
                                    <i class="fa fa-twitter">
                                    </i> Username หรือ Password ไม่ถูกต้อง 
                                    <i class="fa fa-twitter"></i>
                                     </a>
                                 </center>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        
                            <div class="social-login-buttons">
                                <a class="btn btn-link-1 btn-link-1-twitter" href="../index.php">
                                    <i></i> กลับหน้าหลัก
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>