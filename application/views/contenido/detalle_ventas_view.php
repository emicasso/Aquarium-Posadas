<section>
    <div class="container">
    <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
                <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>DETALLE VENTAS</B></p>
            </div>
        <div class="container my-5">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">N° Venta</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($detalles as $row) { ?>

                        <tr style="font-size: 15px;" class="text-left shadow py-5 my-5">
                            <td style="vertical-align: inherit;"><?php echo $row->id_venta; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->nombre; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->detalle_cantidad; ?> </td>
                            <td style="vertical-align: inherit;">$<?php echo $row->detalle_precio; ?> </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</section>