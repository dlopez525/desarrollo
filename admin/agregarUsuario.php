<?php include 'includes/head.php'; ?>

  <?php include 'includes/head.php' ?>
  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <?php include 'includes/menu.php'; ?>
        <?php include 'includes/header.php' ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

              <div class="col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar Usuario <small>different form elements</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="docs/agregarUsuario_exe.php" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nombre_txt">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="apellido_txt">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Contraseña <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="password_txt">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="email_txt">
                        </div>
                      </div>


                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagen: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="file" name="imagen_fls" ?>>
                        </div>
                      </div> -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="agregar_btn">Submit</button>
                        </div>
                      </div>

                    </form>
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
