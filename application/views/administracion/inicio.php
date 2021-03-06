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
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?=site_url('login/salir')?>"><i class="fa fa-sign-out"></i></a>
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
        <li class="treeview">
          <a href="<?=site_url('adm_servicios')?>">
            <i class="fa fa-chevron-right"></i> <span>Servicios</span>
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
            <form action="<?=site_url('Adm_inicio/crearanuncio')?>" method="post" accept-charset="utf-8">
              <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1 control-label">Título</label>
                  <div class="col-sm-11">
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Subtitulo</label>

                  <div class="col-sm-11">
                    <input type="text" name="subtitulo" class="form-control" id="Subtitulo" placeholder="Subtitulo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Texto</label>
                  <div class="col-sm-11">
                    <textarea class="form-control" name="texto" rows="5" id="texto" placeholder="Texto ..."></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-block btn-primary">Aceptar</button>
                  </div>
                </div>
                
                
              </div>
              <!-- /.box-footer -->
            </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edita o elimina una oferta</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Título</th>
                    <th>Subtitutlo</th>
                    <th>Texto</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                  </tr>
                  <?php if ($anuncios != null): ?>
                    <?php foreach ($anuncios as $key => $value): ?>
                      <tr>
                        <td><?= $value->get("anuncio_id")  ?></td>
                        <td id="titulo_<?= $value->get("anuncio_id")?>"><?= $value->get("anuncio_titulo")  ?></td>
                        <td id="subtitulo_<?= $value->get("anuncio_id")?>"><?= $value->get("anuncio_subtitulo")  ?></td>
                        <td id="texto_<?= $value->get("anuncio_id")?>"><?= $value->get("anuncio_texto")  ?></td>
                        <td class="text-center">
                          <button type="button" id="<?= $value->get("anuncio_id") ?>" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                          </button>
                        </td>
                        <td class="text-center">
                          <a href="<?=site_url('Adm_inicio/eliminaranuncio/').$value->get("anuncio_id")?>" onclick="return confirm('Estas seguro de eliminar este registro, recuerda que esta acción es irreversible?')" type="button" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </a></td>
                      </tr>
                    <?php endforeach ?>
                  <?php endif ?>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar una oferta</h4>
              </div>
              <div class="modal-body">

                <form action="<?=site_url('Adm_inicio/editaranuncio')?>" method="post" accept-charset="utf-8">
                  <input id="idanunciohidden" type="text" name="id" hidden>
                      <div class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="titulo" id="tituloedit" placeholder="Título">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Subtitulo</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="subtitulo" id="subtituloedit" placeholder="Subtitulo">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Texto</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="texto" rows="2" id="textoedit" placeholder="Texto ..."></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                        <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-block btn-primary">Guardar cambios</button>
                        </div>
                        <div class="col-md-6">
                          <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
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
<!-- SlimScroll -->
<script src="<?=base_url('resources/admin/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('resources/admin/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('resources/admin/dist/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('resources/admin/dist/js/demo.js')?>"></script>

<script>
  $('#myModal').on('shown.bs.modal', function (argument) {
    var id = argument.relatedTarget.id;
    var titulo = $("#titulo_"+id).text();
    var subtitulo = $("#subtitulo_"+id).text();
    var texto = $("#texto_"+id).text();
    $("#idanunciohidden").val(id);
    $("#tituloedit").val(titulo);
    $("#subtituloedit").val(subtitulo);
    $("#textoedit").val(texto);
  });
</script>
</body>
</html>
