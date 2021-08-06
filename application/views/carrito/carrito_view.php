<section>
    <div class="container">
        <div class="container border  rounded shadow my-5">
            <nav>
                <div class="nav nav-tabs my-3" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-carrito" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Carrito</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-carrito">

                    <div class="row justify-content-md-center my-3">
                        <div class="col-sm-12">
                            <h3 class="text-center "><?php echo $message ?></h3>
                        </div>

                        <div class="col-sm-12 text-center ">
                            <h6 class="text-center text-muted "><?php echo $message2 ?></h6>
                        </div>
                        <div class="col-sm-12 text-center ">
                            <a href="<?php echo base_url('catalogo/1') ?>" class="btn btn-primary shadow" role="button">Seguir Comprando</a>
                        </div>
                    </div>

                    <table id="mytable" class="table table-bordred table-striped">
                        <?php if ($cart = $this->cart->contents()) : ?>


                            <tbody>
                                <div class="mx-2 row border-top border-bottom carrito_titulos">
                                    <div class="col-sm-6 border-right">Nombre</div>
                                    <div class="col-sm border-right ">Precio Unidad</div>
                                    <div class="col-sm border-right">Cantidad</div>
                                    <div class="col-sm">Subtotal</div>
                                </div>
                                <?php
                                $i = 1;
                                foreach ($cart as $item) : ?>
                                    <tr>
                                        <div class="row  border-bottom mb-3 py-3 mx-1">
                                            <div class="col-lg-6 mb-2">
                                                <?php echo $item['name'] ?> </br></br>
                                                <?php echo anchor('carrito_controller/borrar/' . $item['rowid'], 'Eliminar Producto'); ?>
                                            </div>
                                            
                                            <div class="col-lg carrtito_lista">
                                                <strong >$<?php echo $this->cart->format_number($item['price'], 2); ?></strong>
                                            </div>
                                            <div class="col-lg ">
                                                <span class="oculto">cantidad</span>
                                                <span class="border rounded shadow px-2">
                                                    <?php echo $item['qty']; ?>
                                                </span>
                                            </div>
                                            <div class="col-lg ">
                                                <strong> $<?php echo $this->cart->format_number($item['subtotal'], 2); ?></strong>
                                            </div>
                                        </div>
                                    </tr>
                                <?php endforeach; ?>



                                <tr>
                                    <div class="row justify-content-end mr-3 mb-4">
                                        Total de Compra: <strong style="text-indent: 40px;">$<?php echo number_format($this->cart->total(), 2); ?></strong>
                                    </div>
                                    <hr>
                                    <div class="row justify-content-end mb-2 mr-2">

                                        <a href="<?php echo base_url('Ventas_controller/guardar_venta'); ?>" class="btn btn-success py-3 shadow" role="button">Confirmar compra</a>

                                    </div>
                                    <div class="row justify-content-end mr-2">
                                        <button type="button" class="btn btn-danger px-4 shadow" onclick="limpiar_carrito()">Vaciar Carrito</button>
                                    </div>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                    </table>


                    <script>
                        function limpiar_carrito() {
                            var result = confirm('¿Dese vaciar el carrito?');
                            if (result) {
                                window.location = "<?php echo base_url(); ?>carrito_controller/borrar/all";
                            } else {
                                return false; //cancela al accion
                            }
                        }
                    </script>
                </div>





                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-fav">...</div>
            </div>
        </div>
    </div>


</section>