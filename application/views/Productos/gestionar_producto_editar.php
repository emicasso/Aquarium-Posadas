<section>
    <div class="container">
    <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
                <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>EDITAR PRODUCTOS</B></p>
            </div>
    </div>

    <div class="container ">
        <?php echo form_open_multipart("Producto_controller/actualizar_producto/$id_producto") ?>

        <div class="form-group">
            <label for="nombre" class="text-muted">Nombre<span style="color: red;">*</span></label>
            <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$nombre"]); ?>
        </div><span class="text-danger"><?php echo form_error('nombre') ?></span>

        <div class="form-group">
            <label for="categoria" class="text-muted">Categoria<span style="color: red;">*</span></label>
            <?php
                $lista ['0'] = "Seleccione categoria";
            foreach ($categorias as $row) {
                $lista[$row->categoria_id] = $row->categoria_desc;                
            }
            echo form_dropdown('categoria', $lista, $categoria, 'class="form-control"')
            ?>
        </div> <span class="text-danger"><?php echo form_error('categoria') ?></span>

        <div class="form-group">
            <img src="<?php echo base_url("/uploads/"). $imagen ?>" alt="" height="100" width="100">
            <label for="imagen" class="text-muted">Seleccione Imagen<span style="color: red;">*</span></label>
            <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type' => 'file']); ?>
        </div><span class="text-danger"><?php echo form_error('imagen') ?></span>

        <div class="form-group">
            <label for="descripcion" class="text-muted">Descripcion o Marca<span style="color: red;">*</span></label>
            <?php echo form_input(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$descripcion"]); ?>
        </div><span class="text-danger"><?php echo form_error('descripcion') ?></span>

        <div class="form-group">
            <label for="stock" class="text-muted">Stock <span style="color: red;">*</span></label>
            <?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$stock"]); ?>
        </div><span class="text-danger"><?php echo form_error('stock') ?></span>

        <div class="form-group">
            <label for="precio" class="text-muted">Precio <span style="color: red;">*</span></label>
            <?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => "$precio"]); ?>
        </div><span class="text-danger"><?php echo form_error('precio') ?></span>

        <div class="form_group">
            <?php echo form_submit('Modificar', 'Modificar', "class='btn btn-outline-info my-3'"); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</section>