<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Configurações do banco de dados
	$host = "tcp:lutasbanco.database.windows.net,1433";
	$user = "adminserver";
	$password = "Senhafacil123@";
	$database = "phpsite";

	// Conexão com o banco de dados
	$conn = sqlsrv_connect($host, array("UID" => $user, "PWD" => $password, "Database" => $database));

	// Verifica se houve erro na conexão
	if (!$conn) {
		die("Falha na conexão: " . sqlsrv_errors());
	}

	

	// Escapa os valores para evitar injeção de SQL
	

	// Monta a consulta SQL
	$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
	$parameters= [$_POST['email'], $_POST['senha']];
	// Executa a consulta SQL
	$resultado = sqlsrv_query($conn, $sql, $parameters);

	// Verifica se houve erro na consulta
	if (!$resultado) {
		die("Erro na consulta: " . sqlsrv_errors());
	}

	// Obtém o resultado da consulta
	$usuario = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);

	
	// Verifica se o usuário existe e a senha está correta
	if ($usuario && $_POST['senha'] == $usuario['senha']) {
		// Login bem-sucedido
		echo ('Login bem sucedido');
		$user_id = $usuario['id'];
		$user_name = $usuario['nome'];
		$user_image = $usuario['profimage'];
		$user_slogan = $usuario['pslogan'];
		$_SESSION['logado'] = True;
		$_SESSION['userid'] = $user_id;
		$_SESSION['user-image'] = $user_image;
		$_SESSION['user_slogan'] = $user_slogan;
		$_SESSION['user-name'] = $user_name;
		header('Location: index.php');
		exit;
	} else {
		// Login inválido
		$_SESSION['logado'] = False;
		$_SESSION['user-image'] = "";
		echo '<div class="error">Email ou senha inválidos.</div>';
	}

	// Fecha a conexão com o banco de dados
	sqlsrv_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Página de Login</title>
	<link rel="stylesheet" href="./CSS/css-login.css" type="text/css" />
	<html lang="pt-BR">
</head>

<body>
	<form method="post">
		<h1>Página de Login</h1>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required>

		<input type="submit" value="Entrar">
		<p>Não possui uma conta? <a href="./Cadastro.php">Cadastre-se aqui</a>.</p>
		<p>Voltar para a página de início <a href="./index.php">Início</a></p>
	</form>

</body>


</html>