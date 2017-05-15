<?php $ruta = base_url(); ?>


<ul class="breadcrumb breadcrumb-top">
    <li>Valoraciones</li>

</ul>


<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-success alert-dismissable" id="success"
             style="display:<?php echo isset($success) ? 'block' : 'none' ?>">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h4><i class="icon fa fa-check"></i> Operaci&oacute;n realizada</h4>
            <span id="successspan"><?php echo isset($success) ? $success : '' ?></div>
        </span>
    </div>
</div>
<div class="block">
    <a class="btn btn-primary" onclick="Valoracion.add();">
        <i class="fa fa-plus "> Nuevo</i>
    </a>
    <br>
    <?php
    echo validation_errors('<div class="alert alert-danger alert-dismissable"">', "</div>");
    ?>
    <div class="table-responsive">
        <table class="table table-striped dataTable table-bordered" id="example">
            <thead>
            <tr>

                <th>ID</th>
                <th>FECHA</th>
                <th>VALORACION</th>
                <th>PELICULA</th>
                <th>CLIENTE</th>
                <th class="desktop">Acciones</th>

            </tr>
            </thead>
            <tbody>
            <?php if (count($valoraciones) > 0) {

                foreach ($valoraciones as $valoracion) {
                    ?>
                    <tr>

                        <td class="center"><?= $valoracion['valoracion_id'] ?></td>
                        <td><?= $valoracion['fecha'] ?></td>
                        <td><?= $valoracion['valoracion_num'] ?></td>
                        <td><?= $valoracion['pelicula_nombre'] ?></td>
                        <td><?= $valoracion['cliente_nombre'] . " " . $valoracion['cliente_apellido'] ?></td>


                        <td class="center">
                            <div class="btn-group">
                                <?php

                                echo '<a class="btn btn-default" data-toggle="tooltip"
                                            title="Editar" data-original-title="fa fa-comment-o"
                                            href="#" onclick="Valoracion.edit(' . $valoracion['valoracion_id'] . ');">'; ?>
                                <i class="fa fa-edit"></i>
                                </a>
                                <?php echo '<a class="btn btn-default" data-toggle="tooltip"
                                     title="Eliminar" data-original-title="fa fa-comment-o" onclick="Valoracion.delete(' . $valoracion['valoracion_id'] . ',\'' . $valoracion['pelicula_id'] . '\');">'; ?>
                                <i class="fa fa-trash-o"></i>
                                </a>
                            </div>

                        </td>
                    </tr>
                <?php }
            } ?>

            </tbody>
        </table>

    </div>
</div>


<!-- Modales for Messages -->
<div class="modal hide" id="mOK">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload();">
        </button>
        <h3>Notificaci&oacute;n</h3>
    </div>
    <div class="modal-body">
        <p>Registro Exitoso</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal"
           onclick="javascript:window.location.reload();">Close</a>
    </div>
</div>
<div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <form name="formeliminar" id="formeliminar" method="post" action="<?= $ruta ?>valoracion/eliminar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Eliminar valoracion</h4>
                </div>
                <div class="modal-body">
                    <p>Est&aacute; seguro que desea eliminar la valoracion?</p>
                    <input type="hidden" name="valoracion_id" id="id_borrar">
                    <input type="hidden" name="valoracion_num" id="nom_borrar">
                </div>
                <div class="modal-footer">
                    <button type="button" id="confirmar" class="btn btn-primary"
                            onclick="Valoracion.confirmdelete()">Confirmar
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>

</div>


<script>$(function () {
        TablesDatatables.init();
        Valoracion.init();
    });</script>