<section>
    <div class="container">
        <div class="row justify-content-center my-5">
            <h1>Bienvenido Usuario administrador</h1>
        </div>
        <div class="row my-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Que decea hacer?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Mostrar Mensajes <a href="<?php echo base_url('Mensaje_controller/listar_mensaje') ?>" class="btn btn-primary">Ir</a></br></br>
                            Ver todos los productos <a href="<?php echo base_url('catalogo/0') ?>" class="btn btn-primary">Ir</a></br></br>
                            Ver Ventas <a href="<?php echo base_url('admin_controller/ver_ventas') ?>" class="btn btn-primary">Ir</a></br></br>
                            Editar un Producto <a href="<?php echo base_url('gestionar') ?>" class="btn btn-primary">Ir</a></br></br>
                            Cargar un nuevo Producto <a href="<?php echo base_url('Producto_controller/form_agregar_producto') ?>" class="btn btn-primary">Ir</a></br>
                         
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>