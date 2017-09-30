<!-- dashboard -->
<div class="container-fluid dashboard">
    <h3>Configuración</h3>
    <hr>
	
	<form action="<?php echo base_url(); ?>configuracion/guardar" method="post" enctype="multipart/form-data" class="col-md-12" id="form-product">
	  <div class="col-md-6">
	      <h4 class="text-center">Información basica de la tienda.</h4>  
	      
	      <div class="form-group col-md-12">
	        <input type="" name="identification" class="form-control" placeholder="Nit o cedula" required>
	      </div>

	      <div class="form-group col-md-12">
	        <input type="" name="name" class="form-control" placeholder="Nombre" required>
	      </div>

	      <div class="form-group col-md-12">
	        <input type="" name="direction" class="form-control" placeholder="Dirección" required>
	      </div>

	       <div class="form-group col-md-12">
	        <input type="" name="telephone" class="form-control" placeholder="Teléfono" required>
	      </div>

	      <h4 class="text-center">Logo de la tienda</h4> 
	       <div class="form-group col-md-12 not_padding file_product text-center">
	        <input type="file" name="image" id="file" class="inputfile" required />
	        <label for="file" class="labelfile">Seleccione Imagen Principal</label>
	      </div> 

	  </div>
	    
	  <div class="form-group col-md-12">
	    <div class="col-md-6 text-center">
	      <button type="submit" class="btn btn-default" id="crear-producto">Guardar confguración</button>
	    </div>
	  </div>
	  
	</form>

 </div>
