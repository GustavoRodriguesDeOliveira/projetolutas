<?php
$servername = "localhost"; // endereço do servidor de banco de dados
$username = "root"; // usuário do banco de dados
$password = ""; // senha do usuário do banco de dados
$dbname = "phpsite"; // nome do banco de dados

// Cria a conexão com o banco de dados utilizando a extensão MySQLi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
// Verifica se o formulário foi enviado (após clicar no botão "Cadastrar")
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $profilepicnative = './Imagens/IconLogin.png';
    $sloganpadrao = 'Digite seu slogan';

    // Insere os dados na tabela "usuarios"
    $sql = "INSERT INTO usuarios (nome,email, senha, profimage, pslogan) VALUES ('$nome','$email', '$senha', '$profilepicnative', '$sloganpadrao')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: home.php");
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}




?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de usuário</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        input[type="email"],
        input[type="password"], input[type='text'] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Cadastro de usuário</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>