var Valoracion = {

    cache: {},
    inizializeDomCache: function () {
        this.cache.borrar = $('#borrar');
        this.cache.id_borrar = $('#id_borrar');
        this.cache.nom_borrar = $('#nom_borrar');
        this.cache.globalModal = $('#globalModal');
        this.cache.guardar = $('#guardar');
        this.cache.valoracion_id = $('#valoracion_id');
        this.cache.valoracion_num = $('#valoracion_num');
        this.cache.cliente_id = $('#cliente_id');
        this.cache.pelicula_id = $('#pelicula_id');
        this.cache.fecha = $('#fecha');
    },
    init: function () {
        this.inizializeDomCache();
        $("select").chosen({width:'100%'});
    },
    delete: function (id, nom) {
        this.cache.borrar.modal('show');
        this.cache.id_borrar.attr('value', id);
        this.cache.nom_borrar.attr('value', nom);
    },
    edit: function (id) {
        Utilities.showPreloader();
        var ajax = ValoracionService.edit(id);
        ajax.success(function (data) {
            Utilities.hiddePreloader();
            Valoracion.cache.globalModal.html(data);
            Valoracion.cache.globalModal.modal({show: true, keyboard: false, backdrop: 'static'});
        });
        ajax.error(function (error) {
            Utilities.hiddePreloader();
            Utilities.alertModal('<h4> Ha ocurrido un error</h4>', 'warning');
        });
    },
    add: function () {
        Utilities.showPreloader();
        var ajax = ValoracionService.add();
        ajax.success(function (data) {

            console.log(data);
            Utilities.hiddePreloader();
            Valoracion.cache.globalModal.html(data);
            Valoracion.cache.globalModal.modal({show: true, keyboard: false, backdrop: 'static'});
        });
        ajax.error(function (error) {
            Utilities.hiddePreloader();
            Utilities.alertModal('<h4> Ha ocurrido un error</h4>', 'warning');
        });
    }
    ,
    save: function () {

        Valoracion.cache.guardar.addClass('disabled');
        if (Valoracion.cache.valoracion_num.val() == '') {
            Valoracion.cache.guardar.removeClass('disabled');
            Utilities.alertModal('<h4>Debe ingresar la valoracion</h4>', 'warning');
            return false;
        }

        if (Valoracion.cache.cliente_id.val() == '') {
            Valoracion.cache.guardar.removeClass('disabled');
            Utilities.alertModal('<h4>Debe ingresar el cliente</h4>', 'warning');
            return false;
        }
        if (Valoracion.cache.pelicula_id.val() == '') {
            Valoracion.cache.guardar.removeClass('disabled');
            Utilities.alertModal('<h4>Debe ingresar la pelicula</h4>', 'warning');
            return false;
        }

        App.formSubmitAjax($("#formagregar").attr('action'), ValoracionService.index, 'globalModal', 'formagregar', 'guardar');
    }
    ,
    confirmdelete: function () {
        App.formSubmitAjax($("#formeliminar").attr('action'), ValoracionService.index, 'borrar', 'formeliminar');
    }
}



