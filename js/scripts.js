/* 
    Created on : 19/12/2016, 17:56:05
    Author     : Suleimane Manuel Nanque
*/
$(document).ready(function (){
    // Modal - Janela com endereço
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus();
    });
    // Acordion - Esconde e mostra os conteudos
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
    // Araste e Solta
    $("#draggable" ).draggable();
    $("#draggable1" ).draggable();
});