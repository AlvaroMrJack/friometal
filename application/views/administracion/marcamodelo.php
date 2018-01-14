<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fríometal Marca - Modelo</title>
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
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/plugins/select2/select2.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/plugins/datatables/dataTables.bootstrap.css')?>">

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
      <a href="<?=site_url('adm_inicio')?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
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
        Marcas y modelos
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresa una marca</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="input" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-primary">Agregar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger">Borrar campo</button>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresa un modelo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="input" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Categoría</label><!--  -->
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-primary">Agregar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger">Borrar campos</button>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
      </div>
            <div class="row">
              <div class="col-md-6">
                <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edita o elimina una marca</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
                        <i class="fa fa-edit"></i>
                      </button>
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash-o"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
                        <i class="fa fa-edit"></i>
                      </button>
                    </td>
                    <td class="text-center">
                    </button>
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash-o"></i>
                      </button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
              </div>
              <div class="col-md-6">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Edita o elimina un modelo</h3>
                  </div>
                  <!-- /.box-header -->

                  <div class="box-body">
                    <div class="table-responsive">
                      <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Categoría</th>
                          <th class="text-center">Editar</th>
                          <th class="text-center">eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Trident</td>
                          <td class="text-center">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
                              <i class="fa fa-edit"></i>
                            </button>
                          </td>
                          <td class="text-center">
                            <button type="button" class="btn btn-danger">
                              <i class="fa fa-trash-o"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Trident</td>
                          <td>Trident</td>
                          <td class="text-center">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
                              <i class="fa fa-edit"></i>
                            </button>
                          </td>
                          <td class="text-center">
                          </button>
                            <button type="button" class="btn btn-danger">
                              <i class="fa fa-trash-o"></i>
                            </button>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
    </section>
    <!-- /.content -->


    <div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar marca</h4>
              </div>
              <div class="modal-body">
                <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="input" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-primary">Guardar cambios</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->









        <div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar categoría</h4>
              </div>
              <div class="modal-body">
                <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="input" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Categoría</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-primary">Guardar cambios</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->














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
<!-- DataTables -->
<script src="<?=base_url('resources/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('resources/admin/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- Select2 -->
<script src="<?=base_url('resources/admin/plugins/select2/select2.full.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?=base_url('resources/admin/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('resources/admin/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('resources/admin/dist/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('resources/admin/dist/js/demo.js')?>"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Datatable
    $("#example1").DataTable();
    $("#example2").DataTable();
  });
</script>

</body>
</html>
