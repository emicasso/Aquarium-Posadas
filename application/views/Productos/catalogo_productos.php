<div class="container ">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-sm-3  my-5">
                <h3 class="my-3 text-center" style="color: #a373d3;">CATEGORÍAS DE PRODUCTOS</h3>
                <hr>
                <hr>
                <ul class="nav flex-column text-left m-0" style="font-size: 14px;">
                    <li class="nav-item ">
                        <a class="nav-link border text-muted category_item" category="all" href="#">Todos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link border text-muted category_item" category="acces_mant" href="#">Accesorios y Mantenimiento</a>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex border justify-content-between align-items-center">
                            <a class="nav-link text-muted category_item" category="filtros" href="#">Filtros </a>
                            <span class="text-muted mx-3" data-toggle="collapse" href="#collapseFiltros" role="button" aria-expanded="false" aria-controls="collapseExample"> + </span>
                        </div>

                        <div class="collapse" class="collapseFiltros">
                            <ul class="flex-column nav">
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="Fbotellones" href="">Botellones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="Finternos" href="">Internos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="Fmochila_cascada" href="">Mochila/Cascada</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border text-muted category_item" category="iluminacion" href="#">Iluminacion</a>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex border justify-content-between align-items-center">
                            <a class="nav-link text-muted category_item" category="peces" href="#">Peces</a>
                            <span class="text-muted mx-3" data-toggle="collapse" href="#collapsePeces" role="button" aria-expanded="false" aria-controls="collapseExample"> + </span>
                        </div>

                        <div class="collapse" id="collapsePeces">
                            <ul class="flex-column nav">
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="acces_mant" href="">Marinos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="acces_mant" href="">Agua Fría / Estanque</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border text-muted text-center" category="acces_mant" href="">Cardumen</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border text-muted category_item" category="plantas" href="#">Plantas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border text-muted category_item" category="insumos" href="#">Insumos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border text-muted category_item" category="material_filtrante" href="#">Material Filtrante</a>
                    </li>
                </ul>

            </div>

            <div class="col-sm">
                <div class="container ">
                    <div class="container my-5">
                        <div class="row mb-4 ">
                            <?php foreach ($producto as $row) { ?>
                                

                                    <!-- mostrar solo acces_mant -->
                                    <?php if ($row->categoria == 1) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="acces_mant" >
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?> " class="card-img-top img-fluid"  >
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo filtros -->
                                    <?php if ($row->categoria == 2) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="filtros">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo iluminacion -->
                                    <?php if ($row->categoria == 3) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="iluminacion">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo peces -->
                                    <?php if ($row->categoria == 4) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="peces">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo plantas -->
                                    <?php if ($row->categoria == 5) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="plantas">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo insumos -->
                                    <?php if ($row->categoria == 6) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="insumos">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2''");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <!-- mostrar solo material_filtrante -->
                                    <?php if ($row->categoria == 7) { ?>
                                        <div class="card align-items-center product-item my-2 mx-2" style="width: 15rem;" category="material_filtrante">
                                            <img src="<?php echo base_url('/uploads/') . $row->imagen ?>" class="card-img-top img-fluid">
                                            <div class="card-body text-center">
                                                <p><strong>$<?php echo $row->precio; ?></strong></p>
                                                <h5 class="card-title"><?php echo $row->nombre; ?></h5>
                                                <div class="border">
                                                <small class="card-title"><?php echo $row->descripcion; ?></small>
                                                </div>
                                                <?php
                                                if ($this->session->userdata('login')) {
                                                    echo form_open('carrito_controller/agregar_carrito');
                                                    echo form_hidden('id', $row->id_producto);
                                                    echo form_hidden('nombre', $row->nombre);
                                                    echo form_hidden('precio', $row->precio);
                                                    echo form_submit('comprar', 'Agregar al carrito', "class = 'btn btn-outline-primary my-2'");
                                                    echo form_close();
                                                } ?>
                                                </br>
                                                <p class=" text-center">STOCK <?php echo $row->stock; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>


                             
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>