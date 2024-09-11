
<!DOCTYPE html>
<html lang="es">

<head>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DriverCom | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vista/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vista/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="vista/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="vista/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="vista/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="vista/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="vista/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="vista/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <!-- Llamado a cada modulo para implementarlos en la pagina -->
    <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>Com</span>
      <!-- logo for regular state and mobile devices -->
      <img src="vista/dist/img/Logo_horizontal.png" alt="Logo" class="logo-lg">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
      
     
          <!-- Cuenta de Usuario : style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="vista/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Rafael Alvarado</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="vista/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

               
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
       
        </ul>
      </div>
    </nav>
  </header> <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">

      
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>

        <!--Stock General del inventario -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-asterisk"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- modificar los link para los form-->
             <!-- modificar los link para los form-->
              <!-- modificar los link para los form-->
            <li><a href="equipos"><i class="fa fa-circle-o"></i>Inventario General</a></li>
            <li><a href="equipo-n"><i class="fa fa-circle-o"></i>Registro Equipos</a></li> 
            <!-- <li><a href="equipo-n"><i class="fa fa-circle-o"></i>Historial de Cambios</a></li>  -->
            <!-- modificar los link para los form-->
            <!-- modificar los link para los form-->
            <!-- modificar los link para los form-->
          </ul>
        </li>
           <!--Fin del Stock General del inventario -->

             <!--inicio usuario -->
             <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuarios"><i class="fa fa-circle-o"></i>Personas</a></li>
            <li><a href="usuario-n"><i class="fa fa-circle-o"></i>Nuevo Usuario</a></li>
           
          </ul>
        </li>
           <!--Fin usuarios -->

           <!-- Necesitas un Equipo -->
           <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Préstamo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="prestamos"><i class="fa fa-circle-o"></i>Registro de Préstamos</a></li>
            <!-- <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Seguimiento de Préstamos</a></li> -->
          </ul>
        </li>
          <!--Fin Necesitas un Equipo -->

        




          <!--inicio Condiciones de uso-->
        <li>
          <a href="condicionesUso">
            <i class="fa fa-th"></i> <span>Condiciones de uso</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
          <!--Fin Condiciones de uso -->

  
    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Dashboard</li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Inventario</h3>

              <p>Lista inventario</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Nuevo<sup style="font-size: 15px"> usuario</sup></h3>

              <p>Listado Personas</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
             
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Ayuda</h3>

              <p>Solicita Soporte</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Inventario</h3>

              <p>Lista inventario</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Nuevo<sup style="font-size: 15px"> usuario</sup></h3>

              <p>Listado Personas</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
             
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Ayuda</h3>

              <p>Solicita Soporte</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Click Aqui <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
      
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

     

         

        

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2024 <a href="https://github.com/Rafael169" target="black">DriverCom</a>.</strong> todos los 
    derechos recervados.
  </footer></div>    <!-- Fin del Llamado a cada modulo para implementarlos en la pagina -->


  </div>



  <!-- ./wrapper -->
  <!-- jQuery 3 -->
  <script src="vista/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="vista/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- Bootstrap 3.3.7 -->
  <script src="vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- DataTables -->
  <script src="vista/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vista/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="vista/bower_components/raphael/raphael.min.js"></script>
  <script src="vista/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="vista/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->

  <!-- jQuery Knob Chart -->
  <script src="vista/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="vista/bower_components/moment/min/moment.min.js"></script>
  <script src="vista/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="vista/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->

  <!-- Slimscroll -->
  <script src="vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vista/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="vista/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vista/dist/js/demo.js"></script>



  <script src="vista/js/plantilla.js"></script>
</body>

</html>