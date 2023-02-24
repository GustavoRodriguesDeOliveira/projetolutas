<?php
session_start();
if (isset($_POST['upload'])) {
    // Diretório onde a imagem será armazenada
    $diretorio = './Imagens/';

    // Informações sobre o arquivo de imagem
    $nome_arquivo = $_FILES['imagem']['name'];
    $tipo_arquivo = $_FILES['imagem']['type'];
    $tamanho_arquivo = $_FILES['imagem']['size'];
    $temp_arquivo = $_FILES['imagem']['tmp_name'];

    // Verifica se o arquivo é uma imagem
    $permitidos = array('image/jpeg', 'image/png', 'image/gif');
    if (!in_array($tipo_arquivo, $permitidos)) {
        
        header('Location: meuperfil.php');
        echo "Somente arquivos JPEG, PNG e GIF são permitidos";
        exit;
    }

    // Move a imagem para o diretório especificado
    if (move_uploaded_file($temp_arquivo, $diretorio . $nome_arquivo)) {
        echo "Upload de imagem realizado com sucesso!";
    } else {
        echo "Falha ao realizar upload de imagem";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Configurações do banco de dados
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "phpsite";

        // Conexão com o banco de dados
        $conn = mysqli_connect($host, $user, $password, $database);

        // Verifica se houve erro na conexão
        if (!$conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        $profimage = $diretorio . $nome_arquivo;
        $userid = $_SESSION['userid'];

        // Prepara a consulta SQL
        $stmt = mysqli_prepare($conn, "UPDATE usuarios SET profimage = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "si",$profimage, $userid);
        mysqli_stmt_execute($stmt);

        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['user-image'] = $profimage;
            echo "Foto atualizada.";
            header('Location: meuperfil.php');
        } else {
            echo "Nenhum registro foi atualizado.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}

?>