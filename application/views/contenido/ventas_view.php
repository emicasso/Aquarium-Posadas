<section>
    <div class="container">
        <div class="container-fluid text-center border-top border-bottom mt-4 py-2" style="background-color:#484c6c">
            <p style="color: white; font-size:30px" class="animateanimated animatefadeInDown"><B>LISTADO VENTAS</B></p>
        </div>
      

        <div class="container my-5 border">

            <table class="table table-striped">
                <thead>
                    <div class="container my-4">
                            
                                <h4>Búsqueda por Fecha</h4>
                                <form class="text-center" method="POST" action="buscar_venta">
                                    <label>Fecha Inicio</label> </br> <input type="date" name="fecha_inicio" required> </br>
                                    <label>Fecha fin</label> </br> <input type="date" name="fecha_fin" required>
                                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                                </form>
                            
                    </div>
                </thead>

                <thead>
                    <tr>
                        <th scope="col">N° Venta</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fecha Compra</th>
                        <th scope="col">Detalles</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($las_ventas as $row) { ?>
                        <tr style="font-size: 15px;" class="text-left shadow py-5 my-5">
                            <td style="vertical-align: inherit;"><?php echo $row->venta_id; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->nombre; ?> </td>
                            <td style="vertical-align: inherit;"><?php echo $row->venta_fecha; ?> </td>
                            <td> <a class="btn btn-primary" href=" <?php echo base_url("detalle_venta/$row->venta_id"); ?>">Detalles de Venta</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>



</section>