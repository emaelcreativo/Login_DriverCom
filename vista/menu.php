<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['error']) && isset($_SESSION['mensaje'])) {
    echo "<script>alert('" . $_SESSION['mensaje'] . "');</script>";
    unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
}
//if (isset($_SESSION['datos']['data'][0]['rol'])) {
 //   header("Location: ./control.php");
//}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Mejorado</title>
  <link rel="stylesheet" href="../css/menuStyles.css">
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
        <li><a href="#" id="usuario-link"><i class="fas fa-user"></i> Usuario</a></li>
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
        <div class="content-tabla">
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
      <div class="content">
     
      <div class="mostrarUsuarios" style="display: none;">
      <button id="agregar-usuario-btn" class="btn btn-primary">Agregar Usuario</button>
    <table class="table">
      <thead>
        <tr>
          <th>ID Usuario</th>
          <th>Nombre Usuario</th>
          <th>Correo Electrónico</th>
          <th>Estado</th>
          <th>Fecha Modificación</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php include '../modelo/usuarioConsumo.php'; ?>
      </tbody>
    </table>
  </div>
      </div>
</div>
    </div>
  </div>
<!-- modal++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div id="agregarUsuarioModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" id="close-modal">&times;</span>
    <h2>Agregar Usuario</h2>
    <form id="agregarUsuarioForm" action="../modelo/guardarUsuario.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="t1" name="t1" required>

      <label for="email">Correo Electrónico:</label>
      <input type="email" id="t2" name="t2" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="t3" name="t3" required>

      <label for="creador">Creado Por:</label>
      <input type="text" id="t5" name="t5" required>

      <label for="rol">Rol ID:</label>
      <input type="number" id="t6" name="t6" required>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
  <script src="../js/menu.js"></script>
</body>

</html>