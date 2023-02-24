<?php
session_start();
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

    $slogan = $_POST['slogan'];
    $slogan = mysqli_real_escape_string($conn, $slogan);
    $userid = $_SESSION['userid'];

    // Prepara a consulta SQL
    $stmt = mysqli_prepare($conn, "UPDATE usuarios SET pslogan = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "si", $slogan, $userid);
    mysqli_stmt_execute($stmt);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['user_slogan'] = $slogan;
        echo "Slogan atualizado com sucesso.";
        header('Location: meuperfil.php');
    } else {
        echo "Nenhum registro foi atualizado.";
        header('Location: meuperfil.php');
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}




?>