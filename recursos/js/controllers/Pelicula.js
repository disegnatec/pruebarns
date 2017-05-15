var Pelicula = {

    cache: {},
    inizializeDomCache: function () {
        this.cache.borrar = $('#borrar');
        this.cache.id_borrar = $('#id_borrar');
        this.cache.nom_borrar = $('#nom_borrar');
        this.cache.globalModal = $('#globalModal');
        this.cache.guardar = $('#guardar');
        this.cache.documento_id = $('#documento_id');
        this.cache.documento_nombre = $('#documento_nombre');
        this.cache.documento_tipo = $('#documento_tipo');
        this.cache.documento_nombre = $('#documento_nombre');
    },
    init: function () {
        this.inizializeDomCache();
    },
    delete: function (id, nom) {
        this.cache.borrar.modal('show');
        this.cache.id_borrar.attr('value', id);
        this.cache.nom_borrar.attr('value', nom);
    },
    edit: function (id) {
        Utilities.showPreloader();
        var ajax = PeliculaService.edit(id);
        ajax.success(function (data) {
            Utilities.hiddePreloader();
            Pelicula.cache.globalModal.html(data);
            Pelicula.cache.globalModal.modal({show: true, keyboard: false, backdrop: 'static'});
        });
        ajax.error(function (error) {
            Utilities.hiddePreloader();
            Utilities.alertModal('<h4> Ha ocurrido un error</h4>', 'warning');
        });
    },
    add: function () {
        Utilities.showPreloader();
        var ajax = PeliculaService.add();
        ajax.success(function (data) {
            Utilities.hiddePreloader();
            Pelicula.cache.globalModal.html(data);
            Pelicula.cache.globalModal.modal({show: true, keyboard: false, backdrop: 'static'});
        });
        ajax.error(function (error) {
            Utilities.hiddePreloader();
            Utilities.alertModal('<h4> Ha ocurrido un error</h4>', 'warning');
        });
    }
    ,
    save: function () {
        Pelicula.cache.guardar.addClass('disabled');

        if (Pelicula.cache.documento_nombre.val() == '') {
            Pelicula.cache.guardar.removeClass('disabled');
            Utilities.alertModal('<h4>Debe ingresar el nombre</h4>', 'warning',true);
            return false;
        }
        if (DocumentoInventario.cache.documento_tipo.val() == undefined) {
            DocumentoInventario.cache.guardar.removeClass('disabled');
            Utilities.alertModal('<h4>Debe ingresar el tipo</h4>', 'warning',true);
            return false;
        }

        App.formSubmitAjax($("#formagregar").attr('action'), PeliculaService.all, 'globalModal', 'formagregar', 'guardar');
    }
    ,
    confirmdelete: function () {
        App.formSubmitAjax($("#formeliminar").attr('action'), PeliculaService.all, 'borrar', 'formeliminar');
    }
}



