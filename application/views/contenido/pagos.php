<section>
    <div class="container">
        <div class="row">
            <div class="row my-3">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 12px;"><a href="<?php echo base_url('Proyecto_controller/index') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" style="font-size: 12px;" aria-current="page"><strong>Metodos de pago</strong></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row justify-content-center mb-4">
            <div class="col-sm-4">
                <hr>
                <hr>
            </div>
            <div class="col-sm text-center">
                <h2 style="color: #a373d3;">Metodos de Pago</h2>
            </div>
            <div class="col-sm-4">
                <hr>
                <hr>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="accordion" id="accordionExample">
            <div class="">
                <div class="border-top" id="headingCero">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseCero" aria-expanded="true" aria-controls="collapseCero">
                            <h6 style="color: #c7774a;">
                                <ion-icon name="chevron-down-outline"> </ion-icon> Transferencia Bancaria
                            </h6>
                        </button>
                    </h2>
                </div>

                <div id="collapseCero" class="collapse" aria-labelledby="headingCero" data-parent="#accordionExample">
                    <div class="card-body">
                        <small>Esta forma de pago se hace mediante un ingreso en nuestra cuenta. </br>
                            Banco Ejemplo: EXAMPLE ES98 0000 0000 0000 0000 0000</br>
                            Titular: Acuarium S.A</br>

                            (Enviar confirmación de transferencia a tienda@pzes.es para acelerar la verificación y proceso de envío)</br>
                            1. Realizá tu compra desde la tienda online de Catycan.</br>
                            2. Seleccioná el método de pago "Transferencia Bancaria".</br>
                            3. Realizá la transferencia con los datos que te brindamos al confirmar el pedido.</br></small>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="border-top" id="headingUno">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseUno" aria-expanded="true" aria-controls="collapseUnp">
                            <h6 style="color: #c7774a;">
                                <ion-icon name="chevron-down-outline"> </ion-icon> Paypal
                            </h6>
                        </button>
                    </h2>
                </div>

                <div id="collapseUno" class="collapse" aria-labelledby="headingUno" data-parent="#accordionExample">
                    <div class="card-body">
                        <small> A través de nuestra pasarela segura de Pay Pal podrás pagar mediante tu cuenta de Pay Pal. Al finalizar el proceso de compra, serás redirigido a una página segura de PayPal para proceder al pago. Paypal es el líder internacional de pagos en Internet y permite enviar y recibir pagos en Internet de forma segura y cómoda.</small>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="border-top" id="headingDos">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseDos" aria-expanded="true" aria-controls="collapseDos">
                            <h6 style="color: #c7774a;">
                                <ion-icon name="chevron-down-outline"> </ion-icon> Tarjeta de Crédito / Mercado Pago
                            </h6>
                        </button>
                    </h2>
                </div>

                <div id="collapseDos" class="collapse" aria-labelledby="headingDos" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj1.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj2.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj3.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj4.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj5.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj6.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj7.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj8.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj9.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj10.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj11.png" alt="">
                            <img src="<?php echo base_url() ?>assets/img/tarj/tarj12.png" alt="">
                        </div>



                        <small>A través de la pasarela segura del bancopodrás pagar mediante tarjeta de crédito VISA o MASTERCARD. Al finalizar el proceso de compra, serás redirigido a una página segura de la pasarela bancaria. Tras indicar los datos necesarios en el banco nosotros no alamacenaremos ningún dato de tu tarjeta por seguridad, quedando sólo en el registro de la entidad bancaria y su pàsarela.</br></br>
                            1. Realizá tu compra desde la tienda online de Acuarium.</br>
                            2. Seleccioná el método de pago "Tarjeta de crédito / débito".</br>
                            3. Confirmá finalmente tu pedido.</br></br>

                            <strong> Mercado Pago:</strong></br>
                            <a href="https://www.mercadopago.com.ar/cuotas">Ver Promociones vijentes</a></br>
                            1. Realizá tu compra desde la tienda online de Acuarium.</br>
                            2. Seleccioná el método de pago "Mercado Pago".</br>
                            3. Aprovechá las promociones vigentes con tarjeta de Mercado Pago:</br></small>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="border-top" id="headingTres">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
                            <h6 style="color: #c7774a;">
                                <ion-icon name="chevron-down-outline"> </ion-icon>Pago al contado
                            </h6>
                        </button>
                    </h2>
                </div>

                <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordionExample">
                    <div class="card-body">
                        <small>En el caso de que se pase a recoger el pedido por Alcorcón si es posible pagar en mano, también si se compra insitu.</br>
                            1. Realizá tu compra desde la tienda online de Catycan.</br>
                            2. Seleccioná el método de pago "Efectivo".</br>
                            3. Confirmá finalmente tu pedido.</br></small>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>