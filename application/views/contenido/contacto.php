<section>
    <div class="container">
        <div class="row">
            <div class="row my-3">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 12px;"><a href="<?php echo base_url('Proyecto_controller/index') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" style="font-size: 12px;" aria-current="page"><strong>Contacto</strong></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid contContact">
        <div class="row mt-5 bgmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1217.000801987405!2d-55.90659825707848!3d-27.373774139267002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457be3896e9880d%3A0x894cc4156c6b15f7!2sACUARIUM%20Peces%20Ornametales!5e0!3m2!1ses!2sar!4v1618760067944!5m2!1ses!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="container w-100 my-5 " data-aos="">
            <div class="container ">

                <div class="row justify-content-center ">
                    <div class="col-sm-7 py-5 px-5 bg-light shadow">
                        <div class="row">
                            <div class="col-sm">
                                <h3>Enviar Mensaje</h3>
                            </div>
                        </div>
                        
                            <?php echo form_open('registrar_consulta'); ?>
                                <div class="row my-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="apellido" class="text-muted">Apellido<span style="color: red;">*</span></label>
                                            <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'placeholder' => 'Ingrese Apellido', 'autofocus' => 'autofocus', 'value' => set_value('apellido')]); ?>
                                        </div><span class="text-danger"><?php echo form_error('apellido') ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nombre" class="text-muted">Nombre<span style="color: red;">*</span></label>
                                            <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'autofocus' => 'autofocus', 'value' => set_value('nombre')]); ?>
                                        </div><span class="text-danger"><?php echo form_error('nombre') ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mail" class="text-muted">Email<span style="color: red;">*</span></label>
                                            <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'class' => 'form-control', 'placeholder' => 'Ingrese Email', 'autofocus' => 'autofocus', 'value' => set_value('mail')]); ?>
                                        </div><span class="text-danger"><?php echo form_error('mail') ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="motivo" class="text-muted">Motivo<span style="color: red;">*</span></label>
                                            <?php echo form_input(['name' => 'motivo', 'id' => 'motivo', 'class' => 'form-control', 'placeholder' => 'Ingrese Motivo', 'autofocus' => 'autofocus', 'value' => set_value('motivo')]); ?>
                                        </div><span class="text-danger"><?php echo form_error('motivo') ?></span>
                                    </div>
                                </div>
                                <div class="row mt-4 align-items-end">
                                    <div class="col-sm-10 ">
                                        <div class="form-group">
                                            <label for="mensaje" class="text-muted">Mensaje<span style="color: red;">*</span></label>
                                            <?php echo form_textarea(['name' => 'mensaje', 'id' => 'mensaje', 'class' => 'form-control', 'rows' => '2', 'placeholder' => 'Ingrese Mensaje', 'autofocus' => 'autofocus', 'value' => set_value('mensaje')]); ?>
                                        </div><span class="text-danger"><?php echo form_error('mensaje') ?></span>
                                    </div>
                                    <div class="form_group">
                                        <?php echo form_submit('Enviar', 'Enviar', "class='btn btn-outline-info my-3'"); ?>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                        
                    </div>


                    <div class="col-sm-3 shadow text-light" style="background-color: #898cef">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-12 mt-5">
                                <h5>Informacion Contacto</h5>
                            </div>
                            <div class="col-sm-12 my-3">
                                <ion-icon name="location-outline" style="font-size: 25px;"></ion-icon><small>Avenida López y Planes 2919</small>
                            </div>
                            <div class="col-sm-12 my-3">
                                <ion-icon name="phone-portrait-outline" style="font-size: 25px;"></ion-icon><small>+54 (376)4-421382</small>
                            </div>
                            <div class="col-sm-12 my-3">
                                <ion-icon name="mail-open-outline" style="font-size: 25px;"></ion-icon><small>AcuariumPosadas@gmail.com</small>
                            </div>
                            <div class="col-sm-12 mb-4 mt-4">
                                <i class="fab fa-facebook-f mx-1" style="font-size: 25px;"></i>
                                <i class="fab fa-instagram mx-1" style="font-size: 25px;"></i>
                                <i class="fab fa-linkedin-in mx-1" style="font-size: 25px;"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>

</section>