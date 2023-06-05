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
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
</head>
<body id="bg">
    <section>
    <div class="form-box">
        <div class="form-value">
            <h2 class='titolo'>Benvenuto nella nostra home</h2>
            <br>
            <div class='sezione'>
                <form action="guida.php" method="POST">
                    <button type="submit">Guida</button>
                </form>
                <form action="catalogo.php" method="POST">
                    <button type="submit">Catalogo</button>
                </form>
                <form action="mappa.php" method="POST">
                    <button type="submit">Mappa</button>
                </form>
                <form action="../index.php">
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
    </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>