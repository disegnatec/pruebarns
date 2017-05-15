<form name="formagregar" action="<?= base_url() ?>valoracion/guardar" method="post" id="formagregar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Nueva valoracion</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="valoracion_id" id="valoracion_id" required="true"
                       value="<?php if (isset($valoracion['valoracion_id'])) echo $valoracion['valoracion_id']; ?>">
                <div class="row">

                    <div class="form-group">
                        <div class="col-md-6">
                            Cliente
                        </div>
                        <div class="col-md-6">

                            <select name="cliente_id" id="cliente_id">
                                <?php
                                foreach ($clientes as $cliente) {
                                    ?>
                                    <option <?php if (isset($valoracion['cliente_id']) and $valoracion['cliente_id'] == $cliente['cliente_id']) echo 'selected' ?>
                                            value="<?= $cliente['cliente_id'] ?>"><?= $cliente['cliente_nombre'] . ' ' . $cliente['cliente_apellido'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            Nombre de la pelicula
                        </div>
                        <div class="col-md-6">
                            <select name="pelicula_id" id="pelicula_id">
                                <?php
                                foreach ($peliculas as $pelicula) {
                                    ?>
                                    <option <?php if (isset($valoracion['pelicula_id']) and $valoracion['pelicula_id'] == $pelicula['pelicula_id']) echo 'selected' ?>
                                            value="<?= $pelicula['pelicula_id'] ?>"><?= $pelicula['pelicula_nombre'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="col-md-6">
                            Valoracion
                        </div>
                        <div class="col-md-6">

                            <select name="valoracion_num" id="valoracion_num">
                                <?php for ($i = 0; $i <= 10; $i++) {
                                    ?>
                                    <option <?php if (isset($valoracion['valoracion_num']) and $valoracion['valoracion_num'] == $i) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                } ?>
                            </select>
                        </div>


                    </div>


                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="guardar" onclick="Valoracion.save()">
                    Confirmar
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</form>


<script>$(function () {

        Valoracion.init();
    });</script>