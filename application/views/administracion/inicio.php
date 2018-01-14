<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fríometal Administración</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/dist/css/skins/_all-skins.min.css')?>">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('adm_inicio')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Frío</b>METAL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?=site_url('login')?>"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">BARRA DE NAVEGACIÓN</li>
        <li class="treeview">
          <a href="<?=site_url('adm_inicio')?>">
            <i class="fa fa-chevron-right"></i><span>Crear oferta</span>
          </a>
        </li>
        </li>
        <li class="treeview">
          <a href="<?=site_url('adm_productos')?>">
            <i class="fa fa-chevron-right"></i> <span>Productos</span>
            </a>
        </li>
        <li class="treeview">
          <a href="<?=site_url('adm_categorias')?>">
            <i class="fa fa-chevron-right"></i> <span>Categorías</span>
            </a>
        <li class="treeview">
          <a href="<?=site_url('adm_marca_modelo')?>">
            <i class="fa fa-chevron-right"></i> <span>Marca - Modelo</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Publica una oferta
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Completa los datos de la oferta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label">Título</label>
                  <div class="col-sm-11">
                    <input type="input" class="form-control" id="titulo" placeholder="Título">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Subtitulo</label>

                  <div class="col-sm-11">
                    <input type="password" class="form-control" id="Subtitulo" placeholder="Subtitulo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Texto</label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="5" id="texto" placeholder="Texto ..."></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-primary">Aceptar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger">Cancelar</button>
                  </div>
                </div>
                
                
              </div>
              <!-- /.box-footer -->
              
            </div>
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url('resources/admin/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url('resources/admin/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?=base_url('resources/admin/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('resources/admin/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('resources/admin/dist/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('resources/admin/dist/js/demo.js')?>"></script>
</body>
</html>
