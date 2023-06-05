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
        <title>Planimetria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body id="bg">
        <a href="./home.php" class="freccia-indietro">&#8592;</a>
        <section>
            <div class="form-box">
                <div class='planimetria'>
                    <?php
                    // Array delle immagini da visualizzare
                    $immagini = array("mappa1.JPG", "mappa2.JPG");
                    ?>
                    <?php
                    // Stampa delle immagini
                    foreach ($immagini as $immagine) {
                        echo "<img src='../img/$immagine' alt='$immagine'>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</html>