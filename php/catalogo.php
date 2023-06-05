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
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body id="bg">
    <a href="./home.php" class="freccia-indietro">&#8592;</a>
    <section>
        <div class="form-box" style="color:white">
            <div class="form-value">
                <h2>Ecco il nostro catalogo</h2>
                <style>
                    th {
                        background-color: white; /* Colore di sfondo dell'intestazione */
                        color: black; /* Colore del testo dell'intestazione */
                        font-weight: bold; /* Grassetto */
                        font-size: 18px;
                    }
                </style>
                <?php
                require("../conf/db_config.php");
                $stmt = $conn->prepare("SELECT idLibro,titolo,autore,genere,inPrestito FROM libri");
                $stmt->execute();
                $result = $stmt->get_result();
                $rows = $result -> fetch_all(MYSQLI_ASSOC);
                if ($result->num_rows > 0) {
                    // Creazione della tabella
                    echo"<table>";
                    echo "<tr><th>Titolo</th><th>Autore</th><th>Genere</th><th>Disponibile</th></tr>";
                    // Output dei dati per ogni riga
                    foreach($rows as $row){
                        echo "<tr>";
                        echo "<td>" . $row["titolo"] . "</td>";
                        echo "<td>" . $row["autore"] . "</td>";
                        echo "<td>" . $row["genere"] . "</td>";
                        if($row["inPrestito"]){
                            $prestito = "Non disponibile";
                        }else{
                            $prestito = "Disponibile";
                        }
                        echo "<td>" . $prestito . "</td>";
                        echo "</tr>";
                    }
                    // Chiusura della tabella
                    echo "</table>";
                }else{
                    echo "Nessun libro presente nel catalogo.";
                }
                ?>
            </div>
        </div>
    </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>