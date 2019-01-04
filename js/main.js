//Para cambiar entre login o iniciar sesión
$('#login').click(function(){
    $('.iniciar').css({'display':'block'});
    $('.registrar').css({'display':'none'});
});

$(".agrega-foto").click(function () {
    $(".agrega-foto").click();
});

$("#customFile").change(function (e) {
    var $this = $(this);
    $this.next().html($this.val().split('\\').pop());
});