$(document).ready(function () {

    // $('#presentacion-parrafo').hide()
    $('#academicos-parrafo').hide()
    $('#datos-parrafo').hide()
    // $('#form-parrafo').hide()
    $('#laborales-parrafo').hide()

    $('#presentacion-container').click(() => {
        $('#presentacion-parrafo').toggle(300)
        $('#presentacion-icono').toggleClass("fa-chevron-circle-up fa-chevron-circle-down");
    });

    $('#academicos-container').click(() => {
        $('#academicos-parrafo').toggle(300)
        $('#academicos-icono').toggleClass("fa-chevron-circle-down fa-chevron-circle-up");
    });

    $('#datos-container').click(() => {
        $('#datos-parrafo').toggle(300)
        $('#datos-icono').toggleClass("fa-chevron-circle-down fa-chevron-circle-up");
    });

    // $('#form-container').click(() => {
    //     $('#form-parrafo').toggle(300)
    //     $('#form-icono').toggleClass("fa-chevron-circle-down fa-chevron-circle-up");
    // });

    $('#laborales-container').click(() => {
        $('#laborales-parrafo').toggle(300)
        $('#laborales-icono').toggleClass("fa-chevron-circle-down fa-chevron-circle-up");
    });
})