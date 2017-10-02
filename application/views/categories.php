<!-- dashboard -->
<div class="container-fluid dashboard">
    <h3>Categorias</h3>
    <hr>
    
    <div class="col-md-12">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
        Nueva categoria
      </button><br><br>
    </div>
    
      <div class="col-md-12 table-responsive table-clients">
        <table id="table-categories" class="table display" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
          </table>
      </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear categoria</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="col-sm-12">
            <div class="form-group col-sm-12">
              <label for="categorie">Ingrese el nombre de la categoria</label>
              <input type="" name="categorie" id="categorie" class="form-control" placeholder="Nombre categoria" required>        
            </div>
            <div class="form-group col-sm-12">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-default" id="submit_new_categorie">Crear categoria</button>        
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>