<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOVES INDOMITI 2.0</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body id="bg">
    <?php
    require_once('../conf/db_config.php');
    $stmt = $conn->prepare("UPDATE libri SET inPrestito = NULL WHERE idLibro = ?");
    $stmt->bind_param("i", $_SESSION['idLibro']);
    $stmt->execute();
    ?>
    <div style="text-align: center;">
        <h2>Reindirizzamento in corso...</h2>
        <h2>Hai restituito il libro</h2>
    </div>
    
    <?php
    echo '<script>setTimeout(function() { window.location.href = "home.php"; }, 2000);</script>';
    ?>
</body>
</html>