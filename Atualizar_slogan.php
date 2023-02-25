<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco de dados
    $host = "tcp:bancolutas.database.windows.net,1433";
    $user = "adminserver";
    $password = "Senhafacil123@";
    $database = "phpsite";

    // Conexão com o banco de dados
    $conn = sqlsrv_connect($host, array("UID" => $user, "PWD" => $password, "Database" => $database));

    // Verifica se houve erro na conexão
    if (!$conn) {
        die(print_r(sqlsrv_errors(), true));
    }

    $slogan = $_POST['slogan'];
    $userid = $_SESSION['userid'];

    // Prepara a consulta SQL
    $sql = "UPDATE usuarios SET pslogan = ? WHERE id = ?";
    $params = array($slogan, $userid);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        echo "Erro ao executar consulta: " . print_r(sqlsrv_errors(), true);
        exit;
    }

    $rowsAffected = sqlsrv_rows_affected($stmt);

    if ($rowsAffected > 0) {
        $_SESSION['user_slogan'] = $slogan;
        
        header('Location: meuperfil.php');
        echo "Slogan atualizado com sucesso.";
        exit;
    } else {
        header('Location: meuperfil.php');
        echo "Nenhum registro foi atualizado.";
        exit;
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}
