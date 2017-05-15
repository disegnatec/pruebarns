var PeliculaService = {
    urlController: 'pelicula',

    all: function() {
        return $.ajax({
            url: baseurl + PeliculaService.urlController
        })
    },
    edit: function(id) {
        return $.ajax({
            url: baseurl + this.urlController+'/form/' + id,
            type: 'post'
        });
    },
    add: function() {
        return $.ajax({
            url: baseurl + this.urlController+'/form/',
            type: 'post'
        });
    }

}