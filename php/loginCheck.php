<?php
require_once('../conf/db_config.php');
$stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $_POST['email'], $_POST['password']);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
$conn->close();
if ($row) {
    // Utente trovato in tabella UTENTI
    session_start();
    $_SESSION["login"] = "ok";
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["cognome"] = $row["cognome"];

    header("location: ./home.php");
}else{
    header("location: ../index.php?msg=ERR_ACCESSO");
    print_r("Errore");
}
?>