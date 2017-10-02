<!-- dashboard -->
<div class="container-fluid dashboard">
    <h3>Configuración</h3>
    <hr>



	<div class="col-md-4">
	  <!-- Nav tabs -->
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	    <div class="panel panel-default">
	      <div class="panel-heading" role="tab" id="headingOne">
	        <h4 class="panel-title">
	          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	            Configuración inicial
	          </a>
	        </h4>
	      </div>
	      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	        <div class="panel-body">
	          <ul role="tablist">
	            <li><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tienda</a></li>
	            <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Almacenes</a></li>
	            <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Usuarios</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-md-8">
		<!-- Tab panes -->
		<div class="tab-content">
		  <div role="tabpanel" class="tab-pane active" id="home">...</div>
		  <div role="tabpanel" class="tab-pane" id="profile">profile</div>
		  <div role="tabpanel" class="tab-pane" id="messages">...</div>
		  <div role="tabpanel" class="tab-pane" id="settings">...</div>
		</div>
	</div>





	
	<!--<form action="<?php echo base_url(); ?>configuracion/guardar" method="post" enctype="multipart/form-data" class="col-md-12" id="form-product">
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
	  
	</form>-->

 </div>
