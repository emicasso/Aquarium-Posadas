<section>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
                <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>GESTION PRODUCTOS</B></p>
            </div>



            <div class="container border mt-5">
                <div class=" row justify-content-center">
                    <table class="table  ">
                        <thead>
                            <div class="container my-2">
                                <div class="row justify-content-start">

                                    <div class="col-sm-5">
                                        <?php echo form_open('buscar_producto'); ?>
                                        <!-- input -->
                                        <div class="row justify-content-start">
                                            <label for="nombre" class="mx-2 text-center">Buscar Producto</label>
                                            <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'placeholder' => 'Ingrese Nombre', 'class' => 'form-control mx-2 ']);  ?>
                                            <!-- boton buscar -->
                                            <?php echo form_submit('Buscar', 'Buscar', "class= 'btn btn-outline-primary my-2 mx-2 '") ?>
                                        </div>

                                        <?php echo form_close(); ?>

                                    </div>
                                </div>
                            </div>
                        </thead>
                        <thead class="text-muted" style=" font-size:small; ">
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Editar</th>
                            <th>Activar/Eliminar</th>
                        </thead>


                        <div class="container bg-danger">
                            <?php foreach ($producto as $row) { ?>

                                <tr style="font-size: 15px;" class="text-left shadow py-5 my-5">
                                    <td><img src="<?php echo base_url('/uploads/') . $row->imagen ?>" height="80px" width="100px" class="rounded"></td>
                                    <td style="vertical-align: inherit;"><?php echo $row->nombre; ?> </td>
                                    <td style="vertical-align: inherit;"><?php echo $row->categoria_desc; ?> </td>
                                    <td style="vertical-align: inherit;"><?php echo $row->descripcion; ?> </td>
                                    <td style="vertical-align: inherit;"><?php echo $row->stock; ?> </td>
                                    <td style="vertical-align: inherit;"><?php echo $row->precio; ?> </td>
                                    <td style="vertical-align: inherit;"> <a style="font-size: 14px; color:white; background-color:#4a55a3ab;" class="btn shadow rounded-pill" href="<?php echo base_url("Producto_controller/editar_producto/$row->id_producto"); ?>">
                                            <i class="fas fa-pen"></i> Editar</a></td>
                                    <?php
                                    if (($row->estado) == 1) { ?>
                                        <td style="vertical-align: inherit;"> <a class="btn bg-light shadow rounded-circle" href="<?php echo base_url("Producto_controller/eliminar_producto/$row->id_producto"); ?>">eliminar <i class="fas fa-times " style="color: red;"></i></a></td>
                                    <?php } else { ?>
                                        <td style="vertical-align: inherit;"> <a class="btn bg-light shadow rounded-circle" href="<?php echo base_url("Producto_controller/activar_producto/$row->id_producto"); ?>">agregar <i class="fas fa-check" style="color: green; font-size: 13px;"></i></a></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </div>

                    </table>


                </div>
            </div>

        </div>
    </div>

</section>