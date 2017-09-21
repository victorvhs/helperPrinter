
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
      <h1>Novo Defeito</h1>
    </div>
    <div class="container">
      <div class="col" id="res">
      </div>
      <div class="row">

        <div class="col">
          <form class="form" action="" method="post" id="form">
            <div class="form-group">
              <label for="erro">Erro na Máquina</label>
              <input type="text" name="error" id="error" class="form-control">
            </div>
            <div class="form-group">
              <label for="solucao">Solução</label>
              <input type="text" name="solucao" id="solucao" class="form-control">
            </div>
            <div class="form-group">
              <label for="obs">Observação</label>
              <input type="text" name="obs" id="obs" class="form-control">
            </div>
            <div class="form-group">
              <label for="nivel">Nível</label>
              <select class="custom-select" id="nivel" name="nivel">
                <option value="N1">1 Nível</option>
                <option value="N2">2 Nível</option>
                <option value="N3">3 Nível</option>
              </select>
            </div>
            <div class="form-group">
              <label for="apoio">Material de apoio</label>
              <input type="text" name="apoio" id="apoio" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn0" id="btn0" >Gravar</button>

          </form>
          </div>
        </div>
        <div class="w-100">
        </div>

      </div>
    </div>
  </body>

  <script type="text/javascript" src="js/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/procurar.js"></script>
</html>
