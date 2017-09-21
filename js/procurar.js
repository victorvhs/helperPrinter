$(document).ready(function (){

  $('#valProcurar').change(function procurar() {
    if($('#valProcurar').val().length > 0){
      $.ajax({
        url: 'procurar.php',
        method: 'post',
        data: {'procurar': $('#valProcurar').val()},
        success: function(data){
        $('#resposta').html(data);
        }
      });
    }
  });

  $('#btn0').click(function gravar(event) {
      event.preventDefault();
      $.ajax({
        url       : 'procurar.php',
        method    : 'post',
        data      : { 'error'   : $('#error').val(),
                      'solucao' : $('#solucao').val(),
                      'obs'     : $('#obs').val(),
                      'apoio'   : $('#apoio').val(),
                      'novo'    : 'true',
                      'nivel'   : $('#nivel').val()},
        success   : function(data){
          alert(data);
          $('#error').val('');
          $('#solucao').val('');
          $('#obs').val('');
          $('#apoio').val('');
          $('#nivel').val('');
          $('#res').html(data);

        }, // fecha a função anonima do success
      }) // fecha a função .ajax
      });

  });
