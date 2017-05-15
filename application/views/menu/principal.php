<?php $ruta = base_url(); ?>
<div class="content-header content-header-media">
    <div class="header-section">
        <div class="row">
            <!-- Main Title (hidden on small devices for the statistics to fit) -->
            <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                <h1>Bienvenido <strong><?= $this->session->userdata('nombre') ?></strong><br>
                    <small><?= $this->session->userdata('EMPRESA_NOMBRE') ?></small>
                </h1>
            </div>
            <!-- END Main Title -->

            <!-- Top Stats -->
            <div class="col-md-8 col-lg-6">
                <div class="row text-center">
                    <!--  <div class="col-xs-4 col-sm-3">
                        <h2 class="animation-hatch">
                            $<strong>93.7k</strong><br>
                            <small><i class="fa fa-thumbs-o-up"></i> Great</small>
                        </h2>
                    </div>
                    <div class="col-xs-4 col-sm-3">
                        <h2 class="animation-hatch">
                            <strong>167k</strong><br>
                            <small><i class="fa fa-heart-o"></i> Likes</small>
                        </h2>
                    </div>
                    <div class="col-xs-4 col-sm-3">
                        <h2 class="animation-hatch">
                            <strong>101</strong><br>
                            <small><i class="fa fa-calendar-o"></i> Events</small>
                        </h2>
                    </div>
                    <!-- We hide the last stat to fit the other 3 on small devices -->
                    <!--<div class="col-sm-3 hidden-xs">
                        <h2 class="animation-hatch">
                            <strong>27&deg; C</strong><br>
                            <small><i class="fa fa-map-marker"></i> Sydney</small>
                        </h2>
                    </div>-->
                </div>
            </div>
            <!-- END Top Stats -->
        </div>
    </div>
    <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
    <img src="<?php echo $ruta; ?>recursos/img/placeholders/headers/dashboard_header.jpg" alt="header image"
         class="animation-pulseSlow">
</div>
<!-- END Dashboard Header -->

<!-- Mini Top Stats Row -->
<div class="row">
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'productos')) { ?>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="<?= $ruta ?>producto" class="widget widget-hover-effect1 menulink">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-dark-night  animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content animation-pullDown">
                        Nuevo Producto<br>
                        <small></small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'generarventa')) { ?>
        <div class="col-sm-3">

            <a href="<?= $ruta ?>venta" class="widget widget-hover-effect1 menulink">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-dark-night  animation-fadeIn">
                        <i class="gi gi-cart_out"></i>
                    </div>
                    <div class="pull-right">

                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Realizar venta (f3)

                    </h3>
                </div>
            </a>

        </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'registraringreo')) { ?>
        <div class="col-sm-3">

            <a href="<?= $ruta ?>ingresos" class="widget widget-hover-effect1 menulink">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                        <i class="gi gi-cart_in"></i>
                    </div>
                    <div class="pull-right">

                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Realizar compra

                    </h3>
                </div>
            </a>

        </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'stockbodegas')) { ?>
        <div class="col-sm-3">

            <a href="<?= $ruta ?>producto/stock/bodegas" class="widget widget-hover-effect1 menulink">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                        <i class="fa fa-table"></i>
                    </div>
                    <div class="pull-right">

                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Consultar Stock

                    </h3>
                </div>
            </a>

        </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'generarreciboscliente')) { ?>
        <div class="col-sm-3">

            <a href="<?= $ruta ?>cartera/generarrecibos" class="widget widget-hover-effect1 menulink">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                        <i class="gi gi-folder_flag "></i>
                    </div>
                    <div class="pull-right">

                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Generar recibos cliente

                    </h3>
                </div>
            </a>

        </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'generarcomprobanteproveedor')) { ?>
    <div class="col-sm-3">

        <a href="<?= $ruta ?>cuentasPorPagar/generar_comprobante" class="widget widget-hover-effect1 menulink">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                    <i class="gi gi-folder_flag "></i>
                </div>
                <div class="pull-right">

                    <span id="mini-chart-brand"></span>
                </div>
                <h3 class="widget-content animation-pullDown visible-lg">
                    Generar comprobante proveedor

                </h3>
            </div>
        </a>

    </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'movimientosdiarios')) { ?>
    <div class="col-sm-3">

        <a href="<?= $ruta ?>inventario/ajuste" class="widget widget-hover-effect1 menulink">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                    <i class="gi gi-folder_flag "></i>
                </div>
                <div class="pull-right">

                    <span id="mini-chart-brand"></span>
                </div>
                <h3 class="widget-content animation-pullDown visible-lg">
                    Movimientos diarios

                </h3>
            </div>
        </a>

    </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'parametrosinstalacion')) { ?>
    <div class="col-sm-3">

        <a href="<?= $ruta ?>opciones" class="widget widget-hover-effect1 menulink">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-night animation-fadeIn">
                    <i class="fa fa-cogs "></i>
                </div>
                <div class="pull-right">

                    <span id="mini-chart-brand"></span>
                </div>
                <h3 class="widget-content animation-pullDown visible-lg">
                    Parametros de instalacion

                </h3>
            </div>
        </a>

    </div>
    <?php } ?>

    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'ventasdehoy')) { ?>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <a href="#" class="widget">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-default animation-fadeIn">
                    <i class="fa fa-line-chart"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">
                    + <strong><?= $ventashoy ?></strong><br>
                    <small>Ventas de Hoy</small>
                </h3>
            </div>
        </a>
        <!-- END Widget -->
    </div>
    <?php } ?>
    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'comprasdehoy')) { ?>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <a href="#" class="widget">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-default animation-fadeIn">
                    <i class="fa fa-line-chart"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">
                    + <strong><?= $comprashoy ?></strong>
                    <small>Compras de hoy</small>
                </h3>
            </div>
        </a>
        <!-- END Widget -->
    </div>
    <?php } ?>

    <?php if ($this->usuarios_grupos_model->user_has_perm($this->session->userdata('nUsuCodigo'), 'ventasdeldia')) { ?>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <a href="#" class="widget">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-dark-default animation-fadeIn">
                    <i class="gi gi-usd"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">


                    <small> <?= MONEDA ?> <?= $ventastotalhoy['suma'] ?>

                    </small>

                    <small>Ventas del dia</small>
                </h3>
            </div>
        </a>
        <!-- END Widget -->
    </div>
    <?php } ?>


</div>
<!-- END Mini Top Stats Row -->


<!-- Load and execute javascript code used only in this page -->
<script src="<?php echo $ruta; ?>recursos/js/pages/index.js"></script>
<script>$(function () {
        Index.init();
    });</script>

