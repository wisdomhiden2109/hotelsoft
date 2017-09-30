  <!-- dashboard -->
<div class="container-fluid dashboard">
  <h3>Restaurante - Bar</h3>
  <hr>
  
  <div class="col-md-6">

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#searching" aria-controls="searching" role="tab" data-toggle="tab">Buscador</a></li>
        <li role="presentation"><a href="#navigator" aria-controls="navigator" role="tab" data-toggle="tab">Navegador</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="searching">
            <div class="form-group">
                <br>
                <input type="text" class="form-control" id="search_restaurant_bar" placeholder="Nombre del producto">
            </div>

        </div>
        <div role="tabpanel" class="tab-pane" id="navigator">
          <br>Todos
        </div>
      </div>

    </div>

      
  </div>

  <div class="col-md-6">
    <div class="col-md-12 text-center">
        <div class="title_list">Listado de productos</div>
        <div class="mask_table">No hay elementos aun.</div>
        <div class="table-responsive responsive-table-products">
          <table class="table table-striped table-products">
              
          </table>
        </div>
    </div>
    <div class="col-md-12 products_values">
      <div class="col-md-4 text-center value">No. productos: <label class="qty_products">0</label></div>
      <div class="col-md-4 text-center value">Iva: <label class="iva">$0.00</label></div>
      <div class="col-md-4 text-center value">Subtotal: <label class="subtotal">$0.00</label></div>
    </div>

    <div class="col-md-12 facture">
        <div class="facture_total">Total: <span class="value_factured">$0</span></div>
    </div>  

    <div class="col-md-6">
      <div class="payment">
        <i class="material-icons icon-30">local_atm</i>
        Pagar en efectivo
      </div>
    </div>

    <div class="col-md-6">
      <div class="payment">
        <i class="material-icons icon-30">room_service</i>
        Cargar a la habitación
      </div>
    </div>

  </div>

</div> 