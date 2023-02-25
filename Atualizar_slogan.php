<?php
session_start();
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
    $stmt = sqlsrv_prepare($conn, "UPDATE usuarios SET pslogan = ? WHERE id = ?");
    sqlsrv_bind_param($stmt, 1, $slogan);
    sqlsrv_bind_param($stmt, 2, $userid);
    sqlsrv_execute($stmt);

    $rowsAffected = sqlsrv_rows_affected($stmt);

    if ($rowsAffected > 0) {
        $_SESSION['user_slogan'] = $slogan;
        echo "Slogan atualizado com sucesso.";
        header('Location: meuperfil.php');
        exit;
    } else {
        echo "Nenhum registro foi atualizado.";
        header('Location: meuperfil.php');
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}





?>