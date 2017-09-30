
<!DOCTYPE html>
<html>
<head>
  <title>Makesoft - Login</title>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="container">
      <div class="col-md-6 pull-right">
        <form action="<?php  echo base_url();?>login/autenticate" method="post">
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
          </div>
          <div class="form-group">
            <label for="password">Clave</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="***********" required>
          </div>
          <button type="submit" class="btn btn-default">Ingresar</button>
        </form>
      </div>
  </div>
</body>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.js" ></script>
</html>