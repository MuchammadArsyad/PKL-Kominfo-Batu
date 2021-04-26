<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<!-- <h1>Halaman Pegawai</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/> -->
	
	<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Website Magang</title>

  <!-- Favicons -->
  <!-- <link href="img/kominfo-logo.png" rel="icon">
  <link href="img/kominfo-logo.png" rel="apple-touch-icon"> -->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <!-- Data table source -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<!-- end of header -->

<body>
  <section id="container">
    **************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>DINAS KOMUNIKASI DAN INFORMATIKA<span> KOTA BATU</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <!-- Benar -->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <?php
            if($_SESSION['username']=='mahasiswa'){
        ?>
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php?module=home"><img src="img/kominfo-logo.png"  width="80"></a></p>
          <h5 class="centered">Kominfo</h5>
          <br>
		  <li class="">
		  <a class="" href="halaman_pegawai.php?module=list_hasil">
              <!-- <i class="fa fa-list"></i> -->
              <span>Upload Berkas</span>
              </a>
          </li>
          
      <li class="">
		  <a class="" href="halaman_pegawai.php?module=list_hasil">
              <!-- <i class="fa fa-list"></i> -->
              <span>Aktivitas</span>
              </a>
          </li>

        </ul>
        <?php
            }else{
        ?>
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php?module=home"><img src="img/kominfo-logo.png"  width="100"></a></p>
          <h5 class="centered">Admin</h5>
          
          </li>
          <li class="">
            <a class="" href="halaman_pengurus.php?module=upload_berkas">
              <!-- <i class="fa fa-file"></i> -->
              <span>Uploadsssss</span>
              </a>
          </li>
         
          <li class="">
            <a class="" href="halaman_pengurus.php?module=aktivitas">
              <!-- <i class="fa fa-file"></i> -->
              <span>Aktivitas</span>
              </a>
          </li>
          
        </ul>
        <?php
            }
        ?>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart" style="padding-left: 50px;padding-right: 50px;">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Selamat Datang Di Website Magang Dinas Komunikasi Dan Informatika</h3>
            </div>
          
           <?php

           //  Upload File
           if ($_GET['module'] == 'upload_berkas') {
            include "pages/upload/index.php";
          }
          // Aktivitas
          if ($_GET['module'] == 'aktivitas') {
            include "pages/hasil/list_hasil.php";
          }
           ?>
           
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->


    <!--footer start-->
    <footer class="site-footer" style="margin-top: 70vh;">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dinas Komunikasi Dan Informatika Kota Batu</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
       
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <!-- data table source -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#myDataTables').DataTable();
      } );
  </script>
  
    });
  </script> -->
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>

	
</body>
</html>