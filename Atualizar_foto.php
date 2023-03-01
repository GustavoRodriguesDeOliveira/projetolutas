<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
        
    } else {
        
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Configurações do banco de dados
        $serverName = "tcp:lutasbanco.database.windows.net,1433";
        $connectionOptions = array(
            "Database" => "phpsite",
            "Uid" => "adminserver",
            "PWD" => "Senhafacil123@"
        );

        // Conexão com o banco de dados
        $conn = sqlsrv_connect($serverName, $connectionOptions);

        // Verifica se houve erro na conexão
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $profimage = $diretorio . $nome_arquivo;
        $userid = $_SESSION['userid'];

        // Prepara a consulta SQL
        $sql = "UPDATE usuarios SET profimage = ? WHERE id = ?";
        $params = array($profimage, $userid);
        $stmt = sqlsrv_query($conn, $sql, $params);

        if (sqlsrv_rows_affected($stmt) > 0) {
            $_SESSION['user-image'] = $profimage;
            header('Location: meuperfil.php');
            exit;
        } else {
            echo "Nenhum registro foi atualizado.";
        }

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }

}

?>