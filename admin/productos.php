<?php include 'includes/head.php'; ?>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <?php include 'includes/menu.php'; ?>
        <?php include 'includes/header.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php
              if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 1) {
                  echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    El menu se actualizó corecctamente.
                    </div>";
                } elseif ($_GET['msg'] == 2) {
                  echo "<div class='alert alert-warning alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    El menu se eliminó corecctamente.
                    </div>";
                }
              }
             ?>
            <div class="clearfix"></div>

              <div class="col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Productos</h2>
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
                        <?php include 'docs/mostrarProductos.php'; ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'includes/footer.php' ?>
  </body>
</html>
