<?php
class db {
	//host
	private $host = 'localhost';
	//usuario
	private $usuario = 'vhreis';
	//senha
	private $senha = '123456';
	//banco de dados
	private $database = 'erros';

	public function conecta_mysql(){
		//criar a conexao
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');
		//verficar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
        var_dump( 'O coelho passou pelo espelho');
		}
		return $con;
	}
}

?>
