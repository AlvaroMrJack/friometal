<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fríometal Productos</title>
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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url('resources/admin/plugins/iCheck/all.css')?>">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=base_url('resources/img/logos/friometal.ico')?>" type="image/x-icon" />

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
        Productos
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Crea un producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label">Nombre</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-1 control-label">Precio</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="precio" placeholder="Precio">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Marca</label><!--  -->
                  <div class="col-sm-11">
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
                <div class="form-group">
                  <label class="col-sm-1 control-label">Categoría</label><!--  -->
                  <div class="col-sm-11">
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
                <div class="form-group">
                  <label class="col-sm-1 control-label">Estado del producto</label>
                  <div class="col-sm-11">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Producto para venta
                    </label><br>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      Producto para arriendo
                    </label><br>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      Producto para venta y arriendo
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Tipo de producto</label>
                  <div class="col-sm-11">
                    <label>
                      <input type="radio" name="r2" class="minimal" checked>
                      Producto nuevo
                    </label><br>
                    <label>
                      <input type="radio" name="r2" class="minimal">
                      Producto reacondicionado
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label">Descripción</label>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="2" id="descripcion" placeholder="Descripción ..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1 control-label">Imagenes</label>
                  <div class="col-sm-11">
                  <input type="file" multiple="true" id="imagenes">
                    <p class="help-block">Seleccione las imagenes de este producto.</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">PDF</label>
                  <div class="col-sm-11">
                  <input type="file" accept="application/pdf"  id="esp">
                    <p class="help-block">Seleccione un archivo PDF con la información del producto.</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Link de Youtube</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="linkyoutube" placeholder="Link de video de Youtube">
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
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edita o elimina un producto</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
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
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
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
          <!-- /.box -->

    </section>
    <!-- /.content -->


    <div class="modal modal-large fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar producto</h4>
              </div>
              <div class="modal-body">
                <div class="form-horizontal">
                  <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Precio</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio" placeholder="Precio">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Marca</label><!--  -->
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
                <div class="form-group">
                  <label class="col-sm-2 control-label">Estado del producto</label>
                  <div class="col-sm-9">
                    <label>
                      <input type="radio" name="r3" class="minimal" checked>
                      Producto para venta
                    </label><br>
                    <label>
                      <input type="radio" name="r3" class="minimal">
                      Producto para arriendo
                    </label><br>
                    <label>
                      <input type="radio" name="r3" class="minimal">
                      Producto para venta y arriendo
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tipo de producto</label>
                  <div class="col-sm-9">
                    <label>
                      <input type="radio" name="r4" class="minimal" checked>
                      Producto nuevo
                    </label><br>
                    <label>
                      <input type="radio" name="r4" class="minimal">
                      Producto reacondicionado
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="2" id="descripcion" placeholder="Descripción ..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Imagenes</label>
                  <div class="col-sm-9">
                  <input type="file" multiple="true" id="imagenes">
                    <p class="help-block">Seleccione las imagenes de este producto.</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">PDF</label>
                  <div class="col-sm-9">
                  <input type="file" accept="application/pdf"  id="esp">
                    <p class="help-block">Seleccione un archivo PDF con la información del producto.</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Link de Youtube</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="linkyoutube" placeholder="Link de video de Youtube">
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
<!-- iCheck 1.0.1 -->
<script src="<?=base_url('resources/admin/plugins/iCheck/icheck.min.js')?>"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Datatable
    $("#example1").DataTable();
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
  });
</script>
</body>
</html>
