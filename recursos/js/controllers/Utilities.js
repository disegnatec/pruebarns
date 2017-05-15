var Utilities = {


    dom: {
        'barloadermodal': $('#barloadermodal')
    },
    alertModal: function (message, type, disabled) {
        $.bootstrapGrowl(message, {type: type, delay: 2500, allow_dismiss: true});
        if (disabled) {
            $(this).prop('disabled', true);
        }
    },
    showPreloader:function(){
        $('#barloadermodal').modal({
            show: true,
            backdrop: 'static'
        });
    },
    hiddePreloader:function(){
        $('#barloadermodal').modal('hide');
    },
    hideModal:function (modal) {
        $("#"+modal).modal('hide');
    },
    showModal:function (modal) {
        $("#"+modal).modal('show');
    },

}