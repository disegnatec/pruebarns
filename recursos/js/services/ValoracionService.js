var ValoracionService = {
    urlController: 'valoracion',

    index: function() {
        return $.ajax({
            url: baseurl +  ValoracionService.urlController
        })
    },

    edit: function(id) {
        return $.ajax({
            url: baseurl + ValoracionService.urlController+'/form/' + id,
            type: 'post'
        });
    },
    add: function() {
        return $.ajax({
            url: baseurl + ValoracionService.urlController+'/form/',
            type: 'post'
        });
    }

}