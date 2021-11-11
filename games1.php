<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
  .p-head {
    text-align: center;
    font-family: 'Oswald', sans-serif;
    opacity: 1;
    color: solid white;
  }  
  .example-div {
    opacity: 0.8;
    width: 95%;
    background: url(dist/img/blck.png);
    background-size: 80%;
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 0;
  }
  .head-card {
    color: white;
    text-align: center;
    font-size: 50px;
    font-family: 'Oswald', sans-serif;
    opacity: 1;
  }
  .pin-form {
    color: black;
    text-align: center;
    font-size: 5vw;
    font-family: 'Oswald', sans-serif;
    opacity: 1;
    margin: 10px 0;
  }
  #budi {
    cursor: default;
  }
  #budi:hover,#budi:visited,#budi:active {
    opacity: 0;
    cursor: default;
    pointer-events: none;
  }
  #budi:before{
    cursor: default;
  }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anniversary</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="sweet/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="margin: 0;">
<div class="wrapper" style="margin: 0;">

  <div class="content-wrapper" style="margin: 0; background-image: url(dist/img/bg-inti.jpg); background-size: cover; width: 100%; padding: 30px; background-position: center;">

    <div class="parent-div">
      <div class="example-div">
        <form method="post" action="utama.php?s=0&&b=1">
          <div class="head-card">SIAPAKAH YG SUKA MENGAMBUL?</div>
          <div class="pin-form">
            <!-- <button type="submit" class="btn btn-info" style="margin: 0 10px;" id="budi" disabled="">BUDI</input> -->
            <a href="#" class='btn btn-info' id="budi" disabled>BUDI</a>
            <button type="submit" class="btn btn-info" style="margin: 0 10px;">MIRA</input>
          </div>
          <div class="pin-form">
          </div>        
        </form>
      </div>
    </div>
  </div>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="sweet/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
