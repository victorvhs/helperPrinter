
<?php
require_once("bd.php");
$objDb = new db();
$link = $objDb->conecta_mysql();
$sql = 'SELECT * FROM erros';
$res = mysqli_query($link, $sql);
$n = array(
  'n1' => 'badge badge-success',
  'n2' => 'badge badge-warning',
  'n3' => 'badge badge-danger',
);

if (isset($_POST['procurar'])) {
   $chave = $_POST['procurar'];
   $sql = "SELECT id, erro, obs, solucao,apoio,nivel FROM erros WHERE erro LIKE '%$chave%'";
   $res = mysqli_query($link, $sql);

 //$S=mysql_fetch_assoc($result);
 if ($res -> num_rows !=0){
 echo "<table class='table table-hover table-bordered'>
        <tr>
          <th>Defeito</th>
          <th>Solução</th>
          <th>Observação</th>
          <th>Apoio</th>
      </tr>" ;


 /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
 while($escrever=mysqli_fetch_array($res)){
   /*Escreve cada linha da tabela*/
   if($escrever['nivel']=='N1'){
     echo "<tr class='alert alert-success' role='alert'><td><span class='".$n['n1']."'>".
        $escrever['erro'].
        "</td></span>";
   }elseif ($escrever['nivel']=='N2') {
     echo "<tr class='alert alert-warning' ><td><span class='".$n['n2']."'>".
        $escrever['erro'].
        "</td></span>";
   }else{
     echo "<tr class='alert alert-danger'><td><span class='".$n['n3']."'>".
        $escrever['erro'].
        "</td></span>";
   }
  echo "<td>".$escrever['solucao'].
      "</td><td>".
      $escrever['obs'].
      "</td><td>".
      $escrever['apoio'].
      "</td></tr>";
    }/*Fim do while*/
  echo "</table>";
  }
else{
  echo "<p class='alert alert-dark center' > Erro não cadastrado </p>";
  return;
    }
}
//echo "tudo certo, pode continuar";
if( isset($_POST['novo'])){
  $erro=$_POST['error'];
  $obs=$_POST['obs'];
  $solucao=$_POST['solucao'];
  $apoio=$_POST['apoio'];
  $nivel=$_POST['nivel'];

  $sql = "INSERT INTO erros (erro, obs, solucao,apoio,nivel)
          VALUES('$erro','$obs','$solucao','$apoio','$nivel')";

  $res = mysqli_query($link, $sql);

  if($res){
    echo "Inserido com sucesso!";
  }
  else{
    echo "Erro na hora de gravar na dataBase\n
          linha: '$sql' \n ";
  }

    }
if(isset($_POST['atualizar'])){
  $id = $_POST['id'];
  $erro=$_POST['error'];
  $obs=$_POST['obs'];
  $solucao=$_POST['solucao'];
  $apoio=$_POST['apoio'];
  $nivel=$_POST['nivel'];

  $sql = "UPDATE erros SET
                  erro = '$erro',
                  obs  = '$obs',
                  solucao = '$solucao',
                  apoio = '$apoio',
                  nivel = '$nivel'
                  WHERE id = '$id'";
  $res = mysqli_query($link, $sql);

  if($res){
    echo "Inserido com sucesso!";
  }
  else{
    echo "Erro na hora de gravar na dataBase\n
          linha: '$sql' \n ";
  }

}

?>
