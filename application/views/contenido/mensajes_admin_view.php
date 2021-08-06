<section>
    <div class="container">
        <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
            <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>MENSAJES DE USUARIOS</B></p>
        </div>

    </div>
    <div class="container my-5 border">
        <table class="table table-striped border">
            <div class="row justify-content-start">
            <thead>

                <div class="col-sm-5">
                    <?php echo form_open('buscar_clientes'); ?>
                    <!-- input -->
                    <div class="row justify-content-start">
                        <label for="email" class="mx-2 text-center">Buscar mensaje por email</label>
                        <?php echo form_input(['name' => 'email', 'id' => 'email', 'placeholder' => 'Ingrese email', 'class' => 'form-control mx-2 ']);  ?>
                        <!-- boton buscar -->
                        <?php echo form_submit('Buscar', 'Buscar', "class= 'btn btn-outline-primary my-2 mx-2 '") ?>
                    </div>

                    <?php echo form_close(); ?>

                </div>
                </thead>


                <thead>
                    <tr>
                        <th scope="col">N° Mensaje</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($mensajes as $row) { ?>

                        <tr style="font-size: 15px;" class="text-left shadow py-5 my-5">
                            <td style="vertical-align: inherit;"><?php echo $row->id_mensaje; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->apellido; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->nombre; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->mail; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->motivo; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->mensaje; ?> </td>
                            <?php
                            if (($row->estado) == 1) { ?>
                                <td style="vertical-align: inherit;"> <a class="btn bg-light shadow rounded-circle" href="<?php echo base_url("Mensaje_controller/eliminar_mensaje/$row->id_mensaje"); ?>">No leido<i class="fas fa-times " style="color: red;"></i></a></td>
                            <?php } else { ?>
                                <td style="vertical-align: inherit;"> <a class="btn bg-light shadow rounded-circle" href="<?php echo base_url("Mensaje_controller/activar_mensaje/$row->id_mensaje"); ?>">Leido<i class="fas fa-check" style="color: green; font-size: 13px;"></i></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                </tbody>
        </table>
    </div>
    </div>
</section>