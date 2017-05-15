
var ClienteService = {

    urlController : 'cliente',
    urlApi : 'api/Clientes',

    getAll: function () {
        return $.ajax({
            url: baseurl + this.urlApi,

        });
    },
    get: function (id) {
        return $.ajax({
            url: baseurl + this.urlApi+'/ver',
            data:{id:id},
            type:'GET',
            dataType:'json'

        });
    },

}