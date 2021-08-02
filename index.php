<?php 
  ob_start();
  require_once('config/koneksi.php');
  require_once('models/database.php');

  $connection = new Database($host, $user, $pass, $database);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>Donor Plasma Konvalesen</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dataTables/dataTables.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Donor Plasma Konvalesen</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="dropdown">
              <a href="?page=dashboard" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Informasi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=pendaftaranrlwn"> Pendaftaran Relawan</a></li>
                <li><a href="?page=pendaftaranpsien"> Pendaftaran Pasien</a></li>
                <li><a href="?page=tabelrlwn"> Data Relawan</a></li>
                <li><a href="?page=tabelpsien"> Data Pasien</a></li>
              </ul>
              <li><a href="logout.php"><i class="fa fa-power-off"></i>  log out</a></li>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
             <li class="dropdown messages-dropdown">
               </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-power-off"></i> log out </a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
<div id="page-wrapper">

        <?php  
        if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
           include "dashboard.html";
         } 
          else if (@$_GET['page'] == 'pendaftaranrlwn') {
            include "views/pendaftaranrlwn.php"; 
          } 
          else if (@$_GET['page'] == 'pendaftaranpsien') {
            include  "views/pendaftaranpsien.php";
          } 
          else if (@$_GET['page'] == 'tabelrlwn') {
            include "views/tabelrlwn.php";
          }
          else if(@$_GET['page'] == 'tabelpsien') {
            include "views/tabelpsien.php";
         }
         ?>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/dataTables/dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tablerelawan').dataTable();
        $('#tablepasien').dataTable();
      });
    </script>
  </body>
</html>