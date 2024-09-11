<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Mejorado</title>
  <link rel="stylesheet" href="../css/prestamoStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <div class="dashboard">
    <div class="sidebar">
      <div class="sidebar-header">
        <img src="/placeholder.svg?height=40&width=40" alt="Logo">
        <h2>DriverCom</h2>
      </div>
      <ul>
        <li><a href="#" class="active"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fas fa-box"></i> Stock</a></li>
        <li><a href="#"><i class="fas fa-user"></i> Usuario</a></li>
        <li><a href="../modelo/prestamo.php"><i class="fas fa-money-bill-wave"></i> Préstamo</a></li>
        <li><a href="../modelo/condiciones.php"><i class="fas fa-file-alt"></i> Condiciones de uso</a></li>
      </ul>
    </div>
    <div class="main-content">
      <div class="header">
        <div class="search-bar">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Buscar...">
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle">
                <img src="../img/user2.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">cuenta</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="../img/user3.jpg" class="img-circle" alt="User Image">
                </li>
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
      </div>
      <div class="content">
        <h1 class="page-title">Panel de Control</h1>
        <div class="grid-container">
          <div class="grid-item">
            <i class="fas fa-shopping-bag"></i>
            <h3>Ventas Totales</h3>
            <p>$24,500</p>
          </div>
          <div class="grid-item">
            <i class="fas fa-users"></i>
            <h3>Nuevos Usuarios</h3>
            <p>245</p>
          </div>
          <div class="grid-item">
            <i class="fas fa-chart-line"></i>
            <h3>Crecimiento</h3>
            <p>15%</p>
          </div>
          <div class="grid-item">
            <i class="fas fa-box"></i>
            <h3>Productos</h3>
            <p>1,200</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>