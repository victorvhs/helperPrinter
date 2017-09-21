<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Procura de defeitos</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bt/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <div class="jumbotron center">
      <h1>Defeitos comuns e soluções</h1>

    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Insira o defeito" id="valProcurar" name="valProcurar" >
            <button type="submit"  id="basic-addon1">?</button>
          </div>
        </div>
        <div class="w-100">
        </div>
        <div class="col" id="resposta">
        </div>
        <div class="row">
          <div class="col">
              <table class="">
                  <tbody>
                    <tr>
                      <th>Cor</th>
                      <th>Nível</th>
                    </tr>
                    <tr class="alert alert-success">
                      <td>
                        <div class="verde"></div>
                      </td>
                    <td>Nível 1 - Solução Simples.</td>
                  </tr>
                  <tr class="alert alert-warning">
                    <td>
                      <div class="amarelo"></div>
                    </td>
                        <td>Nível 2 - Help desk.</td>
                    </tr>
                        <tr class="alert alert-danger">
                          <td>
                            <div class="vermelho"></div>
                          </td>
                        <td>Nível 3 - Abrir chamado.</td></tr>
                      </tbody>
                </table>
          </div>

        </div>
      </div>
    </div>
  </body>

  

  <script type="text/javascript" src="js/procurar.js"></script>
</html>
