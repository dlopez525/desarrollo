<?php include 'mostrarProductos.php'; ?>
<?php include 'includes/head.php'; ?>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <?php include 'includes/menu.php'; ?>
        <?php include 'includes/header.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

              <div class="col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hover rows <small>Try hovering over the rows</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Producto</th>
                          <th>Categoria</th>
                          <th>Stock</th>
                          <th>Precio</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $producto; ?></td>
                          <td><?php echo $categoria; ?></td>
                          <td><?php echo $stock; ?></td>
                          <td>s./ 1.0</td>
                          <td><a href="edita.php?id=<?php  echo $id;?>">editar</a></td>
                        </tr>
                        <tr>
                         <th scope="row">2</th>
                          <td><?php echo $producto; ?></td>
                          <td><?php echo $categoria; ?></td>
                          <td><?php echo $stock; ?></td>
                          <td>s./ 1.0</td>
                          <td><a href="edita.php?id=<?php  echo $id;?>">editar</a></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                          <td><?php echo $producto; ?></td>
                          <td><?php echo $categoria; ?></td>
                          <td><?php echo $stock; ?></td>
                          <td>s./ 1.0</td>
                          <td><a href="edita.php?id=<?php  echo $id;?>">editar</a></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
  </body>
</html>