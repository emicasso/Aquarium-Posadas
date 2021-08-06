<section>
    <div class="container">
        <div class="row">
        <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
                <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>GESTION PRODUCTOS</B></p>
            </div>
        </div>
    </div>´

    <div class="container">
        <div class="row my-5 justify-content-center shadow" style="background-image: url(<?php echo base_url() ?>assets/img/bg.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;  background-position: center;">


            <div class="col-sm-6 py-3 mx-2 my-2">
                <h2 style="color: white;" class="text-center">Alta de Prodcutos</h2>
                <div class="container shadow p-3 mb-5 rounded" style="background-color: #ffffffe0;">

                    <?php echo form_open_multipart('insertar_producto'); ?>
                    <div class="form-group">
                        <label for="nombre" class="text-muted">Nombre<span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'autofocus' => 'autofocus', 'value' => set_value('nombre')]); ?>
                    </div><span class="text-danger"><?php echo form_error('nombre') ?></span>

                    <div class="form-group">
                        <label for="categoria" class="text-muted">Categoria<span style="color: red;">*</span></label>
                        <?php
                        $lista['0'] = 'Seleccione una categoria';
                        foreach ($categorias as $row) {
                            $lista[$row->categoria_id] = $row->categoria_desc;
                        }
                        echo form_dropdown('categoria', $lista, '0', 'class="form-control"')
                        ?>
                    </div> <span class="text-danger"><?php echo form_error('categoria') ?></span>

                    <div class="form-group">
                        <label for="imagen" class="text-muted">Imagen <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type' => 'file', 'value' => set_value('imagen')]); ?>
                    </div> <span class="text-danger"><?php echo form_error('imagen') ?></span>

                    <div class="form-group">
                        <label for="precio" class="text-muted">Precio <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control', 'placeholder' => 'Ingrese Precio', 'autofocus' => 'autofocus', 'value' => set_value('precio')]); ?>
                    </div><span class="text-danger"><?php echo form_error('precio') ?></span>

                    <div class="form-group">
                        <label for="descripcion" class="text-muted">Descripcion o Marca<span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control', 'placeholder' => 'Ingrese Descripcion', 'autofocus' => 'autofocus', 'value' => set_value('descripcion')]); ?>
                    </div><span class="text-danger"><?php echo form_error('descripcion') ?></span>

                    <div class="form-group">
                        <label for="stock" class="text-muted">Stock <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control', 'placeholder' => 'Ingrese Cantidad de Stock', 'autofocus' => 'autofocus', 'value' => set_value('stock')]); ?>
                    </div><span class="text-danger"><?php echo form_error('stock') ?></span>


                    <small id="emailHelp" class="form-text text-muted">Asegure de haber completado todos los campos sin dejar ninguno vacio y que cada uno este correcto<a style="color: #66362b;" href="<?php echo base_url('Proyecto_controller/termycond') ?>"> Términos y condiciones de servicio.</a></small>

                    <div class="form_group">
                        <?php echo form_submit('Agregar', 'Agregar', "class='btn btn-outline-info my-3'"); ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>