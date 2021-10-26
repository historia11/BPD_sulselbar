 <?php
session_start();
$nama = $_SESSION['nama'];
$level = $_SESSION['level'];
$foto = $_SESSION['foto'];
$isLoggedIn = $_SESSION['isLoggedIn'];
$id=$_SESSION['id'];
 
if($level != 'admin'){
 
    header('Location: /BPD_Sulselbar/admin');
}
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo-banks-sulselbar.svg"/>
    <title>BPD Sulselbaar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/font awesome/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../plugins/datatables/datatables.min.css"/>

    <!-- Theme style -->
    <link rel="stylesheet" href="../plugins/admin style/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../plugins/admin style/css/skins/_all-skins.min.css">
   
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    
    <div class="wrapper">
      <!--
        <div class="logo">
          <img src="../images/logo.png" alt="" style="width: 250px;height: 50px;padding: 2px 0px 4px 40px;">
          <span class="jd-logo"></span>
          <span class="bukit-t"></span>
      </div>
      -->
      <header class="main-header">
        <!-- Logo -->
        <a href="logo-banks-sulselbar.svg" class="logo">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation </span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
        

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../image<?php echo $foto; ?>" class="user-image" alt="">
                  <span class="hidden-xs"><?php echo $nama; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../image<?php echo $foto; ?>" class="img-circle" alt="User">
                    <p>
                      <?php echo $nama; ?>
                      <small><?php echo $level; ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                 
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        <a href="admin.php?p=profil-admin" class="btn btn-default btn-flat"><i class="fa fa-user"> Profil</i></a>
                    </div>
                    <div class="pull-right">
                        <a href="../logout/logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> Keluar</i></a>
                    </div>
                  </li>
                </ul>
              </li>
           
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="margin-top: 10px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="">

          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../image    <?php echo $foto; ?>" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info">
            <p><?php echo $nama; ?>
              <a href="#"><i class="fa fa-circle text-success"></i></a>
            </p>
            </div>
          </div>
        
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
             <li class="treeview">
              <a href="admin.php">
                <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Nasabah</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?p=tambah-data"><i class="fa fa-circle-o"></i> Tambah Data</a></li>
                <li><a href="admin.php?p=list-data"><i class="fa fa-circle-o"></i> List Data</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Pekerjaan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?p=tambah-pekerjaan"><i class="fa fa-circle-o"></i>Pekerjaan</a></li>
              </ul>

              <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Penghasilan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?p=tambah-penghasilan"><i class="fa fa-circle-o"></i>Penghasilan</a></li>
              </ul>
            

              <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Approve</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
        </section>
        <!-- /.sidebar -->
      </aside>
         <?php
     $page_dir='pages';
      if(!empty($_GET['p'])){
          $page=scandir($page_dir,0);
          unset($page[0],$page[1]);
          $p=$_GET['p'];
          if(in_array($p.'.php',$page)){
          include($page_dir.'/'.$p.'.php');
          }
          else{
          include ($page_dir.'/404-page.php');
          }
      }
      else{
          include ($page_dir.'/homeAdmin.php');
      }
    ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b> 
        </div>
        <strong>BPD sulselbar &copy; <?php echo date('Y'); ?></strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="top:50px;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
         
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
          </div>
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
  
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jquery/jquery-2.1.4.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
 
    <script type="text/javascript" src="../plugins/datatables/datatables.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../plugins/admin style/js/app.min.js"></script>
 <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>