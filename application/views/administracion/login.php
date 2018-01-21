<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio de sesión</title>
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
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=base_url('resources/img/logos/friometal.ico')?>" type="image/x-icon" />

</head>
<body class="hold-transition login-page" style="background-image: url(<?=base_url('resources/admin/dist/img/back.jpg')?>"); background-repeat: no-repeat;">
<div class="login-box">
  <div class="login-logo">
    <a><b>Frío</b>metal</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus credenciales</p>

    <form action="<?= site_url('login')?>" method="POST" class="formulario" name="login">
      <div class="form-group">
        <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" id="usuario" class="usuario" placeholder="Usuario">
      </div>
      <div class="form-group">
        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" id="password" class="password_btn" placeholder="Contraseña">
        <input type="submit" class="btn-info fa fa-arrow-right" value="Ir">
      </div>
      <div class="g-recaptcha" data-sitekey="6Leg4Q4UAAAAAMZxNrkN2X0AVZxSH1uHnRT0NdXK"></div>
    </form>
    
      <?php if(!empty($errores)): ?>
        <div class="error">
          <ul>
            <?php echo $errores; ?>
          </ul>
        </div>
      <?php endif; ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url('resources/admin/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url('resources/admin/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>
