

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () /* Quand on clic sur le boutton #sidebarCollapse, #sidebar et #content passe en actif et change de taille */
    {
        $('#sidebar').toggleClass('active'); /* Grâce à width */
        $('#content').toggleClass('active'); /* Grâce à margin-left */
    });

});