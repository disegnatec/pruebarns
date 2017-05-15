<form name="formagregar" action="<?= base_url() ?>cliente/guardar" method="post" id="formagregar">

    <style>
        .row {
            margin-bottom: 10px;
        }
    </style>
    <input type="hidden" name="id" id=""
           value="<?php if (isset($cliente['id_cliente'])) echo $cliente['id_cliente']; ?>">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Nuevo Cliente</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Codigo</label>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="codigo_interno" id="codigo_interno" required="true"
                                   class="form-control"
                                   value="<?php if (isset($cliente['codigo_interno'])) echo $cliente['codigo_interno']; ?>">
                        </div>
                        <div class="col-md-2">
                            <label>Identificación</label>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="identificacion" id="identificacion" required="true"
                                   class="form-control"
                                   value="<?php if (isset($cliente['identificacion'])) echo $cliente['identificacion']; ?>">
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="form-group">

                        <div class="col-md-2">
                            <label>Nombres</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="nombres" id="nombres" required="true"
                                   class="form-control"
                                   value="<?php if (isset($cliente['nombres'])) echo $cliente['nombres']; ?>">
                        </div>


                        <div class="col-md-2">
                            <label>Apellidos</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="apellidos" id="" class="form-control"
                                   value="<?php if (isset($cliente['apellidos'])) echo $cliente['apellidos']; ?>">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Correo</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="email" id="email" class="form-control"
                                   value="<?php if (isset($cliente['email'])) echo $cliente['email']; ?>">
                        </div>

                        <div class="col-md-2">
                            <label>Pais</label>
                        </div>
                        <div class="col-md-4">
                            <select name="pais_id" id="id_pais" required="true" class="form-control"
                                    onchange="region.actualizarestados();">

                                <?php
                                $p = 1;
                                foreach ($paises as $pais) {
                                    $paais['pais' . $p] = $pais['id_pais'];
                                    ?>
                                    <option
                                        value="<?php echo $pais['id_pais'] ?>" <?php if (isset($cliente['id_pais']) and $cliente['pais_id'] == $pais['id_pais']) echo 'selected' ?>><?= $pais['nombre_pais'] ?></option>
                                    <?php
                                    $p++;
                                } ?>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="form-group">


                        <div class="col-md-2">
                            <label>Departamento</label>
                        </div>
                        <div class="col-md-4">
                            <?php
                            $e = 1;
                            if (isset($paais['pais1'])) {
                                ?>
                                <select name="estados_id" id="estado_id" required="true" class="form-control"
                                        onchange="region.actualizardistritos();">

                                    <?php foreach ($estados as $estado) {
                                        $eestado['estado' . $e] = $estado['estados_id'];
                                        ?>
                                        <option
                                            value="<?php echo $estado['estados_id'] ?>" <?php if (isset($cliente['estados_id']) and $cliente['estados_id'] == $estado['estados_id']) echo 'selected' ?>><?= $estado['estados_nombre'] ?></option>
                                        <?php $e++;
                                    } ?>

                                </select>
                                <?php
                            } else {
                                ?>
                                <select name="estados_id" id="estado_id" required="true" class="form-control"
                                        onchange="region.actualizardistritos();">
                                    <option value="">Seleccione</option>
                                    <?php if (isset($cliente['id_cliente'])):
                                        $eestado['estado' . $e] = $estado['estados_id'];
                                        ?>
                                        <?php foreach ($estados as $estado): ?>
                                        <option
                                            value="<?php echo $estado['estados_id'] ?>" <?php if (isset($cliente['estados_id']) and $cliente['estados_id'] == $estado['estados_id']) echo 'selected' ?>><?= $estado['estados_nombre'] ?></option>
                                        <?php $e++; endforeach ?>
                                    <?php endif ?>
                                </select>
                                <?php
                            }
                            ?>
                        </div>


                        <div class="col-md-2">
                            <label>Ciudad</label>
                        </div>
                        <div class="col-md-4">
                            <?php

                            if (isset($eestado['estado1'])) { ?>
                                <select name="ciudad_id" id="ciudad_id" required="true" class="form-control"
                                        onchange="region.actualizarzonas();">
                                    <option value="">Seleccione</option>
                                    <?php foreach ($ciudades as $ciudad): ?>
                                        <option
                                            value="<?php echo $ciudad['ciudad_id'] ?>" <?php if (isset($cliente['ciudad_id']) and $cliente['ciudad_id'] == $ciudad['ciudad_id']) echo 'selected' ?>><?= $ciudad['ciudad_nombre'] ?></option>
                                    <?php endforeach ?>

                                </select>
                                <?php
                            } else {
                                ?>
                                <select name="ciudad_id" id="ciudad_id" required="true" class="form-control"
                                        onchange="region.actualizarzonas();">
                                    <option value="">Seleccione</option>
                                    <?php if (isset($cliente['id_cliente'])): ?>
                                        <?php foreach ($ciudades as $ciudad): ?>
                                            <option
                                                value="<?php echo $ciudad['ciudad_id'] ?>" <?php if (isset($cliente['ciudad_id']) and $cliente['ciudad_id'] == $ciudad['ciudad_id']) echo 'selected' ?>><?= $ciudad['ciudad_nombre'] ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                            <?php } ?>
                        </div>

                    </div>
                </div>


                <!--<div class="row">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Vendedor</label>
                        </div>
                        <div class="col-md-4">
                            <select name="vendedor" id="vendedor" required="true" class="form-control"
                                    onchange="region.actualizarzona();">
                                <option value="0">Seleccione</option>
                                <?php foreach ($vendedores as $vendedor):

                    ?>
                                    <option
                                        value="<?php echo $vendedor['nUsuCodigo'] ?>" <?php if (isset($cliente['vendedor_a']) and $cliente['vendedor_a'] == $vendedor['nUsuCodigo']) echo 'selected' ?>><?= $vendedor['nombre'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="form-group">

                        <div class="col-md-2">
                            <label>Barrio</label>
                        </div>
                        <div class="col-md-4">
                            <?php
                            //   if()
                            ?>
                            <select name="zona" id="zona" required="true" class="form-control">
                                <option value="0">Seleccione</option>
                                <?php foreach ($zonas as $zona): ?>
                                    <option
                                        value="<?php echo $zona['zona_id'] ?>" <?php if (isset($cliente['id_zona']) and $cliente['id_zona'] == $zona['zona_id']) echo 'selected' ?>><?= $zona['zona_nombre'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>


                        <div class="col-md-2">
                            <label>Empresa afiliado </label>
                        </div>
                        <div class="col-md-4">
                            <select name="afiliado" id="afiliado" required="true" class="form-control">
                                <option value="">Seleccione</option>
                                <?php foreach ($afiliados as $afiliado): ?>
                                    <option
                                        value="<?php echo $afiliado['afiliado_id'] ?>" <?php if (isset($cliente['afiliado']) and $cliente['afiliado'] == $afiliado['afiliado_id']) echo 'selected' ?>><?= $afiliado['afiliado_nombre'] ?></option>
                                <?php endforeach ?>
                            </select>

                        </div>


                    </div>
                </div>


                <div class="row">
                    <div class="form-group">

                        <div class="col-md-2">
                            <label>Tipo de cliente</label>
                        </div>
                        <div class="col-md-4">

                            <select name="grupo_id" id="grupo_id" required="true" class="form-control">
                                <option value="">Seleccione</option>
                                <?php foreach ($grupos as $grupo): ?>
                                    <option
                                        value="<?php echo $grupo['id_grupos_cliente'] ?>" <?php if (isset($cliente['grupo_id']) and $cliente['grupo_id'] == $grupo['id_grupos_cliente']) echo 'selected' ?>><?= $grupo['nombre_grupos_cliente'] ?></option>
                                <?php endforeach ?>
                            </select>

                        </div>


                        <div class="col-md-2">
                            <label>Tel&eacute;fono </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="telefono" id="" class="form-control"
                                   value="<?php if (isset($cliente['telefono'])) echo $cliente['telefono']; ?>">
                        </div>


                    </div>
                </div>


                <div class="row">
                    <div class="form-group">

                        <div class="col-md-2">
                            <label> Celular</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="celular" id="" class="form-control"
                                   value="<?php if (isset($cliente['celular'])) echo $cliente['celular']; ?>">
                        </div>


                        <div class="col-md-2">
                            <label>Sexo</label>
                        </div>
                        <div class="col-md-4">

                            Masculino
                            <input name="sexo" type="radio"
                                   value="M" <?php if (isset($cliente['sexo']) && $cliente['sexo'] == 'M') echo 'checked'; ?>>
                            Femenino
                            <input name="sexo" type="radio"
                                   value="F" <?php if (isset($cliente['sexo']) && $cliente['sexo'] == 'F') echo 'checked'; ?>>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="form-group">


                        <div class="col-md-2">
                            <label>Fecha de nacimiento</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                                   value="<?php if (isset($cliente['fecha_nacimiento'])) echo date('d-m-Y', strtotime($cliente['fecha_nacimiento'])); ?>">
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="form-group">


                        <div class="col-md-5">
                            <label>¿Desea bloquear al cliente cuando supere el monto máximo?</label>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="valida_fact_maximo" id="valida_fact_maximo"
                                   class="" <?php if (isset($cliente['valida_fact_maximo']) && $cliente['valida_fact_maximo'] == '1') echo 'checked="true"'; ?>
                            >
                        </div>

                        <div class="col-md-2">
                            <label>Valor máximo facturación</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="facturacion_maximo" id="facturacion_maximo" class="form-control"
                                   value="<?php if (isset($cliente['facturacion_maximo'])) echo $cliente['facturacion_maximo']; ?>"
                                   onkeydown="return soloDecimal(this, event);">
                        </div>


                    </div>
                </div>


                <div class="row">
                    <div class="form-group">


                        <div class="col-md-5">
                            <label>Valida venta crédito</label>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="valida_venta_credito" id="valida_venta_credito"
                                   class="" <?php if (isset($cliente['valida_venta_credito']) && $cliente['valida_venta_credito'] == '1') echo 'checked="true"'; ?>
                            >
                        </div>
                        <div class="col-md-2">
                            <label>Días de Crédito</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="dias_redito" id="dias_redito" class="form-control"
                                   value="<?php if (isset($cliente['dias_redito'])) echo $cliente['dias_redito']; ?>"
                                   onkeydown="return soloNumeros(event);">
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-2">
                        <label for="" class="control-label">Direccion</label>
                    </div>
                    <div class="col-md-10">


                        <input type="text" name="direccion" id="location" class="form-control" autocomplete="on"
                               value="<?php if (isset($cliente['direccion'])) echo $cliente['direccion']; ?>">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div id="us2" style="width: 100%; height: 400px;"></div>
                        Lat.: <input type="text" id="latitud" name="latitud" required readonly
                                     value="<?php if (isset($cliente['latitud'])) echo $cliente['latitud']; else echo '0'; ?>"/>
                        Long.: <input type="text" id="longitud" name="longitud" required readonly
                                      value="<?php if (isset($cliente['longitud'])) echo $cliente['longitud']; else echo '0'; ?>"/>
                        <script>
                            $('.selectpicker').selectpicker();
                        </script>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" id="guardarcliente" class="btn btn-primary" onclick="grupo.guardar()"
                        value="asas">Confirmar
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

            </div>
            <!-- /.modal-content -->
        </div>
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $("select").chosen({'width': '100%'});
        $("#fecha_nacimiento").datepicker();


    });


    if ($('#latitud').val() == '0') {
        // (setTimeout(function () {

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (objPosition) {
                var lon = objPosition.coords.longitude;
                var lat = objPosition.coords.latitude;
                ;
                $('#longitud').val(lon);
                $('#latitud').val(lat);
                $('#us2').locationpicker({
                    location: {latitude: lat, longitude: lon},
                    radius: 50,
                    inputBinding: {
                        latitudeInput: $('#latitud'),
                        longitudeInput: $('#longitud'),
                        locationNameInput: $('#location')
                    },
                    enableAutocomplete: true,
                    onchanged: function (currentLocation, radius, isMarkerDropped) {
                        (currentLocation.latitude + ", " + currentLocation.longitude);


                    }
                });
            }, function (objPositionError) {
                switch (objPositionError.code) {
                    case objPositionError.PERMISSION_DENIED:
                        alert("No se ha permitido el acceso a la posición del usuario.");
                        break;
                    case objPositionError.POSITION_UNAVAILABLE:
                        alert("No se ha podido acceder a la información de su posición.");
                        break;
                    case objPositionError.TIMEOUT:
                        alert("El servicio ha tardado demasiado tiempo en responder.");
                        break;
                    default:
                        alert("Error desconocido.");
                }
            }, {
                maximumAge: 75000,
                timeout: 15000
            });
        }
        else {
            alert("Su navegador no soporta la API de geolocalización.");
        }
        // })(), 5000);
    }
    else {
        $('#us2').locationpicker({
            location: {latitude: $('#latitud').val(), longitude: $('#longitud').val()},
            radius: 50,
            inputBinding: {
                latitudeInput: $('#latitud'),
                longitudeInput: $('#longitud'),
                locationNameInput: $('#location')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                (currentLocation.latitude + ", " + currentLocation.longitude);

            }
        });

    }

</script>
<script type="text/javascript">


    var cliente = {
        ajaxgrupo: function () {
            return $.ajax({
                url: '<?= base_url()?>cliente'

            })
        },
        guardar: function () {
            $("#guardar").addClass('disabled');


            if ($("#identificacion").val() == '') {

                var growlType = 'warning';

                $.bootstrapGrowl('<h4>Debe ingresar la identificaci&oacute;n</h4>', {
                    type: growlType,
                    delay: 2500,
                    allow_dismiss: true
                });


                $("#guardar").removeClass('disabled');

                return false;
            }

            if ($("#grupo_id").val() == '') {
                var growlType = 'warning';

                $.bootstrapGrowl('<h4>Debe seleccionar el grupo</h4>', {
                    type: growlType,
                    delay: 2500,
                    allow_dismiss: true
                });
                $("#guardar").prop('disabled', false);
                $(this).prop('disabled', true);

                return false;
            }

            if ($("#id_pais").val() == '') {
                var growlType = 'warning';

                $.bootstrapGrowl('<h4>Debe seleccionar el pais</h4>', {
                    type: growlType,
                    delay: 2500,
                    allow_dismiss: true
                });

                $(this).prop('disabled', true);
                $("#guardar").prop('disabled', false);
                return false;
            }


            if ($("#estado_id").val() == '') {
                var growlType = 'warning';

                $.bootstrapGrowl('<h4>Debe seleccionar la ciudad</h4>', {
                    type: growlType,
                    delay: 2500,
                    allow_dismiss: true
                });

                $(this).prop('disabled', true);
                $("#guardar").prop('disabled', false);
                return false;
            }


            if ($("#ciudad_id").val() == '') {
                var growlType = 'warning';

                $.bootstrapGrowl('<h4>Debe seleccionar el distrito</h4>', {
                    type: growlType,
                    delay: 2500,
                    allow_dismiss: true
                });

                $(this).prop('disabled', true);
                $("#guardar").prop('disabled', false);
                return false;
            }

            /*if ($("#zona").val() == '') {
             var growlType = 'warning';

             $.bootstrapGrowl('<h4>Debe seleccionar la zona</h4>', {
             type: growlType,
             delay: 2500,
             allow_dismiss: true
             });

             $(this).prop('disabled', true);

             return false;
             }*/

            /*   if ($("#vendedor").val() == '') {
             var growlType = 'warning';
             $("#vendedor").focus()
             $.bootstrapGrowl('<h4>Debe seleccionar un Vendedor</h4>', {
             type: growlType,
             delay: 2500,
             allow_dismiss: true
             });

             $(this).prop('disabled', true);

             return false;
             }*/

            App.formSubmitAjax($("#formagregar").attr('action'), this.ajaxgrupo, 'agregar', 'formagregar');
        }


    }

</script>