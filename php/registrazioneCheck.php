<?php
require("../conf/db_config.php");

$stmt = $conn->prepare("INSERT INTO utenti(nome,cognome,classe,email,password) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $_POST["nome"], $_POST["cognome"], $_POST["classe"], $_POST["email"],$_POST["password"]);
$stmt->execute();
header("location: ./home.php");

$stmt->close();
$conn->close()
?>