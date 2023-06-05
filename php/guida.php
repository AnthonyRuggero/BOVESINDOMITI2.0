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
    <title>Guida</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
</head>
<body id="bg">
    <a href="./home.php" class="freccia-indietro">&#8592;</a>
    <div class='guida'>
        <section>
            <div class="form-box">
                <div id='testo'>
                        <h2>Prestiti:</h2>
                        <br>
                        <h3>-Dopo aver consultato in precedenza il catalogo e aver scovato il libro adatto a te, inquadra il qrCode sulla copertina con il tuo smartphone</h3>
                        <br>
                        <h3>-Effettua il login con le tue credenziali</h3>
                        <br>
                        <h3>-Premi il tasto prestito</h3>
                        <br>
                        <h3>-Hai terminato la guida per la gestione dei prestiti</h3>
                        <br>
                        <h3>Buona Lettura!!</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="form-box">
                <div id='testo'>
                    <h2>Restituzioni:</h2>
                    <br>
                    <h3>-Per terminare il prestito del libro inquadra il qrCode sulla copertina con il tuo smartphone</h3>
                    <br>
                    <h3>-Effettua il login con le tue credenziali</h3>
                    <br>
                    <h3>-Premi il tasto restituisci</h3>
                    <br>
                    <h3>-Hai terminato la guida per la gestione della restituzione</h3>
                    <br>
                    <h3>A presto!!</h2>
                </div>
            </div>
        </section>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>