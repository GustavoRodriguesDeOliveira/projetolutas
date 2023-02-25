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
		<?php
		// Verifica se o formulário foi enviado
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Configurações do banco de dados
			$host = "bancolutas.database.windows.net";
			$user = "adminserver";
			$password = "Senhafacil123@";
			$database = "phpsite";

			// Conexão com o banco de dados
			$conn = sqlsrv_connect($host, array("UID" => $user, "PWD" => $password, "Database" => $database));

			// Verifica se houve erro na conexão
			if (!$conn) {
				die("Falha na conexão: " . sqlsrv_errors());
			}

			// Obtém os valores do formulário
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			// Escapa os valores para evitar injeção de SQL
			$email = sqlsrv_real_escape_string($conn, $email);
			$senha = sqlsrv_real_escape_string($conn, $senha);

			// Monta a consulta SQL
			$sql = "SELECT * FROM usuarios WHERE email = '$email'";

			// Executa a consulta SQL
			$resultado = sqlsrv_query($conn, $sql);

			// Verifica se houve erro na consulta
			if (!$resultado) {
				die("Erro na consulta: " . sqlsrv_errors());
			}

			// Obtém o resultado da consulta
			$usuario = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);
			session_start();

			// Verifica se o usuário existe e a senha está correta
			if ($usuario && $senha == $usuario['senha']) {
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
				header("Location: index.php");
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
		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required>

		<input type="submit" value="Entrar">
		<p>Não possui uma conta? <a href="./Cadastro.php">Cadastre-se aqui</a>.</p>
		<p>Voltar para a página de início <a href="./index.php">Início</a></p>
	</form>
	<script>
		var userImage = document.querySelector('#user-id-data img');
		userImage.setAttribute('src', '<?php echo $_SESSION['user_image_url']; ?>');
	</script>
</body>


</html>