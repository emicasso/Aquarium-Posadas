<header class="header hero">
  <!-- VidNav -->
  <div class="header-video">
    <div class="row">
      <div class="col-sm-3 cd"></div>
      <div class="col-sm-9">
        <div class="navbar-content header-video">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"></a>
            <img src="<?php echo base_url() ?>assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            ACUARIUM
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-content navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('admin_controller/admin') ?>">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('Mensaje_controller/listar_mensaje') ?>">Ver Mensajes</a>
                </li>
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('catalogo/2') ?>">Catalogo</a>
                </li>
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('admin_controller/ver_ventas') ?>">Ver ventas</a>
                </li>
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('Producto_controller/form_agregar_producto') ?>">Cargar Productos</a>
                </li>
                <li class="nav-item border-right">
                  <a class="nav-link" href="<?php echo base_url('gestionar') ?>">Editar Productos</a>
                </li>
                <?php if ($this->session->userdata('login')) { ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i> <?php echo $this->session->userdata('nombre'); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="<?php echo base_url('salir') ?>"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </nav>
        </div>
        <video src="<?php echo base_url() ?>assets/img/video2.mp4" autoplay loop></video>
      </div>

    </div>

  </div>

  <!-- text -->
  <div class="header-content text-left">
    <div class="cont-text animate__animated animate__fadeInUp animate__slow">
      <h1>ACU<strong>ARIUM</strong></h1>
      <div class="d-flex flex-column">
        <h2>PECES <strong>ORNAMENTALES</strong></h2>
      </div>
      <div class="d-flex flex-column">
        <p>El placer <strong>De poseer algo DIFERENTE</strong></p>
      </div>
      <div class="d-flex">
        <a href="<?php echo base_url('Proyecto_controller/nosotros') ?>" class="btnn btn-lg my-2">CONOCE MAS</a>
      </div>
    </div>
  </div>
</header>