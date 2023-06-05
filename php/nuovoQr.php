<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <title>NuovoQr</title>
</head>
<body id="bg">
    <div class="form-box" style="color:white">
    <div class="form-value">
    <p style="text-align:center">AMMINISTRATORE</p>
    <?php
    require("../conf/db_config.php");
    
    $stmt = $conn->prepare("SELECT * FROM libri");
    $stmt->execute();
    $result = $stmt->get_result();
    // Creazione del form con i libri
    echo '<form action="stampaQr.php" method="post">';
    echo "<table>";
    echo '<tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Seleziona</th></tr>';
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["idLibro"] . '</td>';
            echo '<td>' . $row["Titolo"] . '</td>';
            echo '<td>' . $row["Autore"] . '</td>';
            echo '<td><input type="checkbox" name="libri_selezionati[]" value="' . $row["idLibro"] . '"></td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="4">Nessun libro presente nel database.</td></tr>';
    }
    
    echo '</table>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';

    $conn->close();
    ?>
    </div>
    </div>
</body>
</html>