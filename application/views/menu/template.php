<?php
date_default_timezone_set('America/Lima');

// Base URL
$ruta = base_url();

/* Template variables */
$template = array(
    'name' => 'PRUEBA NSR',
    'version' => '1.0',
    'author' => 'Jhiney',
    'robots' => 'noindex, nofollow',
    'title' => 'PRUEBA NSR',
    'description' => 'Prueba para empresa NSR',
    // true                     enable page preloader
    // false                    disable page preloader
    'page_preloader' => false,
    // true                     enable main menu auto scrolling when opening a submenu
    // false                    disable main menu auto scrolling when opening a submenu
    'menu_scroll' => true,
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar' => 'navbar-default',
    // ''                       empty for a static layout
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header' => 'navbar-fixed-top',

    'sidebar' => '',
      'main_style' => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire' or '' leave empty for the Default Blue theme
    'theme' => 'amethyst',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content' => 'horizontal-menu',
    'active_page' => basename($_SERVER['PHP_SELF'])
);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PRUEBA NSR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta Http-Equiv="Cache-Control" Content="no-cache">
    <meta Http-Equiv="Pragma" Content="no-cache">
    <meta Http-Equiv="Expires" Content="0">
    <link rel="manifest" href="/manifest.json">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo $ruta; ?>recursos/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="<?php echo $ruta; ?>recursos/recursos/img/icon152.png" sizes="152x152">

    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/bootstrap.min.css?v="<?php echo date('ims') ?>>

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/main.css?v="<?php echo date('ims') ?>>

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
    <link id="theme-link" rel="stylesheet"
          href="<?php if ($template['theme'] != '') {
              echo $template['theme'];
          } ?>">

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/themes.css">
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo $ruta; ?>recursos/css/buttons.dataTables.css">

    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="<?php echo $ruta; ?>recursos/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>

    <!-- Remember to include excanvas for IE8 chart support -->
    <!--[if IE 8]>
    <script src="<?php echo $ruta?>recursos/js/helpers/excanvas.min.js"></script><![endif]-->

    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="<?php echo $ruta; ?>recursos/js/vendor/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script>window.onerror = function () {
            return true;
        } </script>
    <script src="<?php echo base_url() ?>recursos/js/jquery-ui.js"></script>
    <script src="<?php echo $ruta ?>recursos/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/js/pages/compMaps.js"></script>


    <script src="<?php echo $ruta ?>node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/js/plugins.js"></script>

    <!--<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
    <script src="<?php echo $ruta; ?>recursos/js/locationpicker.jquery.js"></script>
    <script type="text/javascript"
            src='http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA8pVsx_FTtolzHo8xmOb_011y14MQDP3I'></script>
    <script src="<?php echo $ruta ?>recursos/js/helpers/gmaps.min.js"></script>
    <script src="<?php echo $ruta; ?>recursos/js/bootstrap-select.min.js"></script>
    <script src="<?php echo $ruta; ?>recursos/js/common.js"></script>
    <script src="<?php echo $ruta; ?>recursos/js/Validacion.js"></script>
    <script src="<?php echo $ruta ?>recursos/js/pages/tablesDatatables.js?v=<?= date('Ymdis') ?>"></script>

    <!-- este es para el zoom -->
    <script src="<?php echo $ruta; ?>recursos/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="<?php echo $ruta; ?>recursos/js/buttons.html5.js"></script>
    <!--- RECURSOS DE NPM---->
    <!--  <script src="<?php echo $ruta; ?>node_modules/screenfull/dist/screenfull.js"></script>-->
    <script src="<?php echo $ruta ?>node_modules/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="<?php echo $ruta ?>node_modules/datatables-buttons/js/buttons.flash.js"></script>
    <script src="<?php echo $ruta ?>node_modules/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo $ruta ?>node_modules/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo $ruta ?>node_modules/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo $ruta ?>recursos/js/buttons.html5.js"></script>
    <script src="<?php echo $ruta ?>node_modules/datatables-buttons/js/buttons.print.js"></script>
    <script>
        var baseurl = '<?php echo base_url();?>';
        var currentuser = '<?= $this->session->userdata('nUsuCodigo');?>';
    </script>

    <!---Services Javascript --->

    <script src="<?php echo $ruta; ?>recursos/js/services/ValoracionService.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta; ?>recursos/js/services/PeliculaService.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta; ?>recursos/js/services/ClienteService.js?v=<?= date('Ymdis') ?>"></script>


    <!--Controllers Javascript-->
    <!---Utilities-->
    <script src="<?php echo $ruta; ?>recursos/js/controllers/Utilities.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta; ?>recursos/js/controllers/Cliente.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta; ?>recursos/js/controllers/Pelicula.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta; ?>recursos/js/controllers/Valoracion.js?v=<?= date('Ymdis') ?>"></script>
    <script src="<?php echo $ruta ?>recursos/js/app.js?v=<?= date('Ymdis') ?>"></script>


    <style>
        .loading-icon {
            background: url("<?php echo $ruta ?>recursos/img/loading.gif") no-repeat;
            width: 192px;
            height: 24px;
            margin: 0 auto;
        }
    </style>

</head>

<body>

<div id="page-wrapper"<?php if ($template['page_preloader']) {
    echo ' class="page-loading"';
} ?>>
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
    <div class="preloader themed-background">
        <h1 class="push-top-bottom text-light text-center"><strong>SID</strong></h1>

        <div class="inner">
            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>

            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
        </div>
    </div>


    <div id="page-container">

        <!-- Main Container -->
        <div id="main-container">

            <header class="navbar navbar-default">


                    <!-- Horizontal Menu + Search -->
                    <div id="horizontal-menu-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="menulink" href="<?= $ruta ?>valoracion">Valoraciones</a>
                            </li>

                            <li>
                                <a class="menulink" href="<?= $ruta ?>cliente">Clientes</a>
                            </li>
                            <li>

                                <a class="menulink" href="<?= $ruta ?>pelicula">Peliculas</a>
                            </li>


                        </ul>

                    </div>


            </header>
            <!-- END Header -->


            <div id="page-content">
                <!-- Charts Header -->
                <?php echo $cuerpo ?>

            </div>

        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


<input type="hidden" id="base_url" value="<?= base_url() ?>">

<div class="modal fade" id=globalModal tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">
</div>


<div class="modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true" id="barloadermodal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Cargando...
            </div>
            <div class="modal-body">
                <!-- <h3>Cargando Imagen, por favor espere...</h3>-->

                <div class="progress">
                    <div class="progress-bar  progress-bar-striped progress-bar-info active" role="progressbar"
                         aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                         style="width: 100%">
                        <span class="sr-only">Cargando...</span>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


</body>
</html>
<script>

    $(document).ready(function () {

        handleF();


    });


    function handleF() {

        $('body').on('keydown', function (e) {


            if (e.keyCode == 116) {
                e.preventDefault();
                e.stopPropagation();

                return false;
            }


    }


</script>


