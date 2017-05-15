<?php $ruta = base_url(); ?>


<ul class="breadcrumb breadcrumb-top">
    <li>Clientes</li>

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
  <!--  <a class="btn btn-primary" onclick="Cliente.add();">
        <i class="fa fa-plus "> Nuevo</i>
    </a>-->

    <?php
    echo validation_errors('<div class="alert alert-danger alert-dismissable"">', "</div>");
    ?>
    <div class="table-responsive">
        <table class="table table-striped dataTable table-bordered" id="example">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
              <!--  <th class="desktop">Acciones</th>-->
            </tr>
            </thead>
            <tbody>
            <?php if (count($clientes) > 0) {
                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                        <td class="center"><?= $cliente['cliente_id'] ?></td>
                        <td><?= $cliente['cliente_nombre'] ?></td>
                        <td><?= $cliente['cliente_apellido'] ?></td>
                        <!--<td class="center">
                            <div class="btn-group">
                                <?php
                                echo '<a class="btn btn-default" data-toggle="tooltip"
                                            title="Editar" data-original-title="fa fa-comment-o"
                                            href="#" onclick="Cliente.edit(' . $cliente['cliente_id'] . ');">'; ?>
                                <i class="fa fa-edit"></i>
                                </a>
                                <?php echo '<a class="btn btn-default" data-toggle="tooltip"
                                     title="Eliminar" data-original-title="fa fa-comment-o" onclick="Cliente.delete(' . $cliente['cliente_id'] . ',\'' . $cliente['cliente_nombre'] . '\');">'; ?>
                                <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </td>-->
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
    <form name="formeliminar" id="formeliminar" method="post" action="<?= $ruta ?>cliente/eliminar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Eliminar cliente</h4>
                </div>
                <div class="modal-body">
                    <p>Est&aacute; seguro que desea eliminar el cliente?</p>
                    <input type="hidden" name="drogueria_relacionada_id" id="id_borrar">
                    <input type="hidden" name="drogueria_relacionada_nombre" id="nom_borrar">
                </div>
                <div class="modal-footer">
                    <button type="button" id="confirmar" class="btn btn-primary"
                            onclick="Cliente.confirmdelete()">Confirmar
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>

</div>

<script>$(function () {
        TablesDatatables.init();
        Cliente.init();
    });</script>