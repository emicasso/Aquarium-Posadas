<section>
    <div class="container">
        <div class="row">
            <div class="row my-3">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 12px;"><a href="<?php echo base_url('Proyecto_controller/index') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" style="font-size: 12px;" aria-current="page"><strong>Registrarse</strong></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>´

    <div class="container">
        <div class="row my-5 justify-content-center shadow" style="background-image: url(<?php echo base_url() ?>assets/img/bg.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;  background-position: center;">
          

            <div class="col-sm-6 py-3 mx-2 my-2">
                <h2 style="color: white;" class="text-center">REGISTRARTE</h2>
                <div class="container shadow p-3 mb-5 rounded" style="background-color: #ffffffe0;">

                    <?php echo form_open('Registrar'); ?>

                    <div class="form-group">
                        <label for="nombre" class="text-muted">Nombre <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese nombre', 'autofocus' => 'autofocus', 'value' => set_value('nombre')]); ?>
                    </div> <span class="text-danger"><?php echo form_error('nombre') ?></span>

                    <div class="form-group">
                        <label for="apellido" class="text-muted">Apellido <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'placeholder' => 'Ingrese Apellido', 'autofocus' => 'autofocus', 'value' => set_value('apellido')]); ?>
                    </div><span class="text-danger"><?php echo form_error('apellido') ?></span>

                    <div class="form-group">
                        <label for="telefono" class="text-muted">Telefono <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'class' => 'form-control', 'placeholder' => 'Ingrese telefono', 'autofocus' => 'autofocus', 'value' => set_value('telefono')]); ?>
                    </div><span class="text-danger"><?php echo form_error('telefono') ?></span>

                    <div class="form-group">
                        <label for="direccion" class="text-muted">Direccion <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'direccion', 'id' => 'direccion', 'class' => 'form-control', 'placeholder' => 'Ingrese direccion', 'autofocus' => 'autofocus', 'value' => set_value('direccion')]); ?>
                    </div><span class="text-danger"><?php echo form_error('direccion') ?></span>

                    <div class="form-group">
                        <label for="mail" class="text-muted">Correo electronico <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'class' => 'form-control', 'placeholder' => 'Ingrese Email', 'autofocus' => 'autofocus', 'value' => set_value('mail')]); ?>
                    </div><span class="text-danger"><?php echo form_error('mail') ?></span>

                    <div class="form-group">
                        <label for="password" class="text-muted">Contraseña <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Ingrese Contraseña', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
                    </div><span class="text-danger"><?php echo form_error('password') ?></span>

                    <div class="form-group">
                        <label for="passconf" class="text-muted">Repetir Contraseña<span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'passconf', 'id' => 'passconf', 'class' => 'form-control', 'placeholder' => 'Repetir Contraseña', 'autofocus' => 'autofocus', 'value' => set_value('passconf')]); ?>
                    </div><span class="text-danger"><?php echo form_error('passconf') ?></span>

                    <small id="emailHelp" class="form-text text-muted">Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestros <a style="color: #66362b;" href="<?php echo base_url('Proyecto_controller/termycond') ?>"> Términos y condiciones de servicio.</a></small>

                    <div class="form_group">
                        <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-outline-info my-3'"); ?>
                    </div>


                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>