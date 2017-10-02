<!-- dashboard -->
<div class="container-fluid dashboard">
    <h3>Crear producto</h3>
    <hr>
    <form action="<?php echo base_url(); ?>productos/crear" method="post" enctype="multipart/form-data" class="col-md-12" id="form-product">
      <div class="col-md-6">
          <p class="text-center">Información basica del producto.</p>  
          
          <div class="form-group col-md-3">
            <input type="text" name="referencia" class="form-control" placeholder="Cod. Ref" required>
          </div>

          <div class="form-group col-md-9">
            <input type="text" name="name" class="form-control" placeholder="Nombre del producto" required>
          </div>

          <div class="form-group col-md-12">
            <textarea type="" name="description" class="form-control" placeholder="Descripción del producto" rows="6" required></textarea>
          </div>

          <div class="form-group col-sm-4">
            <input type="text" name="price" class="form-control" placeholder="Precio" required>
          </div>

          <div class="form-group col-xs-12 col-sm-4">
            <select name="categorie" id="categorie" class="form-control" required>
              <option value="">Categoria</option>
              <?php foreach ($categories as $categorie): ?>
                  <option value="<?php echo $categorie['idcategoria'] ?>"><?php echo $categorie["nombre"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group col-xs-12 col-sm-4">
            <select name="subcategorie" id="subcategorie" class="form-control" required>
              <option value="">Sub - Categoria</option>
            </select>
          </div>
      </div>

      <div class="col-md-6">
        <p>Imagenes del producto (Minimo 1 - Maximo 4)</p> 
         <div class="form-group col-md-12 not_padding file_product">
          <input type="file" name="image1" id="file" class="inputfile" required />
          <label for="file" class="col-md-6 labelfile">Seleccione Imagen Principal</label>
        </div> 

        <div class="form-group col-md-12 not_padding file_product">
          <input type="file" name="image2" id="file1" class="inputfile" />
          <label for="file1" class="col-md-6 labelfile">Seleccione Imagen 2</label>
        </div> 

        <div class="form-group col-md-12 not_padding file_product">
          <input type="file" name="image3" id="file2" class="inputfile" />
          <label for="file2" class="col-md-6 labelfile">Seleccione Imagen 3</label>
        </div> 

        <div class="form-group col-md-12 not_padding file_product">
          <input type="file" name="image4" id="file3" class="inputfile" />
          <label for="file3" class="col-md-6 labelfile">Seleccione Imagen 4</label>
        </div> 
      </div>

      <div class="form-group col-md-12">
        <div class="col-md-6">
          <button type="submit" class="btn btn-default" id="crear-producto">Crear producto</button>
        </div>
      </div>
      
    </form>
      
</div>