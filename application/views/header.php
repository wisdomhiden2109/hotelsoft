
<!DOCTYPE html>
<html>
<head>
  <title>Admin Hotel</title>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTable.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<div class="nav-side-menu">
    <div class="brand">GUSRESORT</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
          <ul id="menu-content" class="menu-content collapse out">
              <li onclick="location.href='<?php echo base_url(); ?>'">
                  <i class="fa fa-dashboard fa-lg"></i> Hotel Villa Luz 
              </li>

              <li  onclick="location.href='<?php echo base_url(); ?>restaurant-bar.html'">  
                <i class="material-icons text-center icon-30">shopping_cart</i>
                <div>Vender </div>
              </li>

              <li onclick="location.href='<?php echo base_url(); ?>clients.html'">
                  <i class="material-icons text-center icon-30">supervisor_account</i>
                  <div>Clientes</div> 
              </li>
              
              <li data-toggle="collapse" data-target="#inventory" class="collapsed">
                <i class="material-icons text-center icon-30">chrome_reader_mode</i>
                <div>Inventario</div> 
              </li>  
              <ul class="sub-menu collapse" id="inventory">
                <li onclick="location.href='<?php echo base_url(); ?>categories.html'">Categorias</li>
                <li onclick="location.href='<?php echo base_url(); ?>subcategories.html'">Subcategorias</li>
                <li onclick="location.href='<?php echo base_url(); ?>productos'">Productos</li>
              </ul>

              <li data-toggle="collapse" data-target="#promotions" class="collapsed">
                <i class="material-icons text-center icon-30">contact_mail</i>
              </li>  
              <ul class="sub-menu collapse" id="promotions">
                <li>General</li>
                <li>Temporada</li>
                <li>Especial</li>
              </ul>

              <li onclick="location.href='<?php echo base_url(); ?>planes.html'">
                  <i class="material-icons text-center icon-30">event</i>
                  <div>Planes</div> 
              </li>

              <li onclick="location.href='<?php echo base_url(); ?>aditional_services.html'">  
                <i class="material-icons text-center icon-30">add_to_photos</i>
                <div>Servicios Adicionales</div>
              </li>

              <li onclick="location.href='<?php echo base_url(); ?>configuracion'">  
                <i class="material-icons text-center icon-30">settings</i>
                <div>Configuración</div>
              </li>
          </ul>
     </div>
</div>

<div class="nav-profile">
 <div class="col-md-12"> 
    <div class="profile">
      <i class="material-icons text-center">person_pin</i>
       <span class="user"><?php echo $this->session->nombre.' '.$this->session->apellido; ?></span>
       <a href="<?php echo base_url(); ?>login/logout"><i class="material-icons text-center">exit_to_app</i></a>
    </div>
  </div>
</div>