<!-- dashboard -->
<div class="container-fluid dashboard">
    <h3>Productos</h3>
    <hr>
    
    <div class="col-md-12">
      <a class="btn btn-default" href="<?php echo base_url(); ?>productos/nuevo">Nuevo producto</a><br><br>
    </div>
    

      <div class="col-md-12 table-responsive table-clients">
        <table id="table-products" class="table display" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Referencia</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Subcategoria</th>
                      <th>Categoria</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
          </table>
      </div>
</div>