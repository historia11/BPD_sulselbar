
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-banks-sulselbar.svg"/>
    <title>BPD Sulselbar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/font awesome/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./plugins/datatables/datatables.min.css"/>

    <!-- Theme style -->
    <link rel="stylesheet" href="./plugins/admin style/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="./plugins/admin style/css/skins/_all-skins.min.css">

    <style type="text/css">
      body{
        background-image: url("logo-banks-sulselbar.svg");
      }
    </style>

  </head>
  <body class="hold-transition">
    <div class="login-box">
      
      <div class="login-box-body">
        <div class="login-box-msg"><img src="logo-banks-sulselbar.svg" alt="" width="60px"></div>
        <div class="login-logo">
          <a href="#"><b>BPD Sulselbar</b></a>
        </div><!-- /.login-logo -->
        <p class="login-box-msg">sign in</p>
        <form action="./login/login-proses.php" method="post">
          
          <div class="form-group ">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group ">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">
              
            </div ><!-- /.col -->
            <div class="d-flex justify-content-center" > 
              <button type="submit" class="btn btn-primary center-block">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
         
        </div><!-- /.social-auth-links -->

     

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
     <!-- jQuery 2.1.4 -->
    <script src="./plugins/jquery/jquery-2.1.4.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
 
    <script type="text/javascript" src="./plugins/datatables/datatables.min.js"></script>

    <!-- AdminLTE App -->
    <script src="./plugins/admin style/js/app.min.js"></script>

  </body>
</html>
