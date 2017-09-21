$(document).ready(function (){
  var id;
  console.log("Js iniciado");

  $('.editar').click(function editar() {
     id = $(this).attr('id');
     //Deixa apenas a linha da tabela para edição
     $('.colEditar').hide();
     $('.linha').hide('fast');
     $('#l'+id).show("fast");
     $('#editar').show("fast");

     //Prenche o formulario com os valores do id corrente
     var campoErro = $('.err'+id).html();
     var campoSol = $('.sol'+id).html();
     var campoObs = $('.obs'+id).html();
     var campoApoio = $('.apoio'+id).html();

     $('#error').val(campoErro);
     $('#solucao').val(campoSol);
     $('#obs').val(campoObs);
     $('#apoio').val(campoApoio);

  });// Fecha função editar

  $('#atualizar').click(function atualizar(event){

      $.ajax({
        url       : 'procurar.php',
        method    : 'post',
        data      : { 'error'     : $('#error').val(),
                      'solucao'   : $('#solucao').val(),
                      'obs'       : $('#obs').val(),
                      'apoio'     : $('#apoio').val(),
                      'nivel'     : $('#nivel').val(),
                      'id'        : id,
                      'atualizar' : 'true'},
        success   : function(data){
          alert(data);
        }, // fecha a função anonima do success
      }) // fecha a função .ajax

      //mostra a tabela e oculta os campos de atualizaçao

      $('.colEditar').show()
      $('.linha').show('slow');
      $('#editar').hide("fast");

    });//Fecha função atualizar

  $('#voltar').click(function voltar(event){
    event.preventDefault();
    $('.colEditar').show();
    $('.linha').show();
    $('#editar').hide();
  }); // fecha função voltar

}); // Fecha função ready
