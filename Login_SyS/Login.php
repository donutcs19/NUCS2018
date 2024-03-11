<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

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
                                <form role="form" action="check_login.php" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input  type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" value="Log In" class="btn">Login!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                  <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <h3></h3>
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