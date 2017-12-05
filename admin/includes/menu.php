<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title">iFoods!</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../views/<?php echo $foto; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $nombre ." ". $apellido; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-edit"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="agregarProducto.php">Agregar Productos</a></li>
                      <li><a href="productos.php">Productos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="agregarMenus.php">Agregar Menu</a></li>
                      <li><a href="menus.php">Menu</a></li>
                    </ul>
                  </li>
                  <?php
                    if ($_SESSION['app_tipoU'] == 1) {
                      echo '<li><a><i class="fa fa-edit"></i>Trabajadores <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="agregarTrabajador.php">Agregar Trabajador</a></li>
                          <li><a href="trabajadores.php">Trabajadores</a></li>
                        </ul>
                      </li>';
                      echo '<li><a><i class="fa fa-edit"></i>Usuarios <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="agregarUsuario.php">Agregar Usuario</a></li>
                          <li><a href="Usuario.php">Usuario</a></li>
                        </ul>
                      </li>';
                    }
                   ?>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
