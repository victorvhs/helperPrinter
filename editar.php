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
    <script type="text/javascript" src="js/editar.js"></script>
  </head>
  <body>
    <h1 class="display-4 center">Editar</h1>
    <div class="container">

<?php
require_once("bd.php");
$objDb = new db();
$link = $objDb->conecta_mysql();
$sql = 'SELECT * FROM erros';
$res = mysqli_query($link, $sql);

$sql = "SELECT id, erro, obs, solucao,apoio,nivel FROM erros ";
$res = mysqli_query($link, $sql);

//$S=mysql_fetch_assoc($result);
$n = array(
  'n1' => 'badge badge-success',
  'n2' => 'badge badge-warning',
  'n3' => 'badge badge-danger',
);

if ($res -> num_rows !=0){
echo "<table class='table table-hover table-bordered'>
     <tr>
       <th>Defeito</th>
       <th>Solução</th>
       <th>Observação</th>
       <th>Apoio</th>
       <th class='colEditar'>Editar</th>
   </tr>" ;


/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){
/*Escreve cada linha da tabela*/
if($escrever['nivel']=='N1'){
  echo "<tr class='alert alert-success linha' id='l".$escrever['id']."' role='alert'>
    <td>
      <span class='".$n['n1']." err".$escrever['id']."'>".
        $escrever['erro'].
     "</td></span>";
}elseif ($escrever['nivel']=='N2') {
  echo "<tr class='alert alert-warning linha' id='l".$escrever['id']."'>
    <td>
      <span class='".$n['n2']." err".$escrever['id']." '>".
     $escrever['erro'].
     "</td></span>";
}else{
  echo "<tr class='alert alert-danger linha'  id='l".$escrever['id']."''>
    <td>
    <span class='".$n['n3']." err".$escrever['id']."'>".
     $escrever['erro'].
     "</td></span>";
}
echo "<td class='sol".$escrever['id']."'>".
      $escrever['solucao'].
   "</td>
   <td class='obs".$escrever['id']."'>".
   $escrever['obs'].
   "</td>
   <td class='apoio".$escrever['id']."'>".
   $escrever['apoio'].
   "</td><td class='colEditar'>".
   '<button type="button" class="btn btn-secondary editar"  id='.$escrever['id'].'>Editar</button>'.
   "</td></tr>";
 }/*Fim do while*/
echo "</table>";
}
?>
<div class="container" id="editar" style="display:none;border: 1px black">
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
    <div class="btn-group-vertical">
      <button type="submit" name="button" class="btn btn-primary" id="atualizar">Atualizar</button>
      <button type="submit" name="button" class="btn btn-secondary" id="voltar">Voltar</button>
    </div>

</form>
</div>
</div>
</body>
</html>
