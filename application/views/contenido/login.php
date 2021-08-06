<section>
    <div class="container">
        <div class="row">
            <div class="row my-3">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 12px;"><a href="<?php echo base_url('Proyecto_controller/index') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" style="font-size: 12px;" aria-current="page"><strong>Login</strong></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>´

    <div class="container">
        <div class="row my-5 justify-content-center shadow" style="background-image: url(<?php echo base_url() ?>assets/img/bg.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;  background-position: center;">
            <div class="col-sm-5 py-3 mx-2 my-2">
                <h2 style="color: white;" class="text-center">ACCEDER</h2>
                <div class="container shadow p-3 mb-5  rounded" style="background-color: #ffffffe0;">

                    

                    <?php echo form_open('ingresar') ?>
                    <div class="form-group">
                        <label for="mail" class="text-muted">Nombre de usuario o correo electrónico <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese Email', 'value' => set_value('mail')]); ?>
                        <small id="emailHelp" class="form-text text-muted">Ingrese su correo de usuario.</small>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-muted">Contraseña <span style="color: red;">*</span></label>
                        <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Ingrese Password', 'value' => set_value('password')]); ?>
                    </div>
                    <div class="form-group form-check my-n2">
                        <input type="checkbox" class="form-check-input border-dark" id="exam1eCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                    </div>
                    <div class="my-2">
                        <a href="#" style="color: #a373d3;">Olvidaste tu contraseña?</a></br>
                    </div>
                    <div class="form_group">
                        <?php echo form_submit('Ingresar', 'Ingresar', "class='btn btn-outline-info my-3'") ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>