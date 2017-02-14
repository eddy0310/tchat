$().ready(function (){
    $("#jarjar").click(function (){
        var message = $("#yoda").val();
        var pseudo = $("#cpo").val();
        $.ajax({
            url: "http://tchat.vador/tchat/web/app_dev.php/envoie",
            data: {"message": message, "pseudo":pseudo},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#palpatine").html(data)
            }
        });
    });
});