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
    <title>Prestito</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body id="bg">
    <div>
        <?php
            require("../conf/db_config.php");
            $stmt = $conn->prepare("SELECT * FROM libri WHERE idLibro = ?");
            $stmt->bind_param("i", $_SESSION['idLibro']);
            $stmt->execute();
            $result = $stmt->get_result();  
            $row = $result->fetch_assoc();
            echo "<h2>". $row['Titolo'] ."</h2>";
            echo "<h4>". $row['Autore'] ."</h4>";
            echo "<h4>". $row['Genere'] ."</h4>";
            
            if ($row['inPrestito'] == ''){
                echo " <form action='prendiLibro.php' method='POST'>
                    <button type='submit'>Prendi il Libro</button>
                </form>";
            }else{
                echo " <form action='lasciaLibro.php' method='POST'>
                    <button type='submit'>Lascia il Libro</button>
                </form>";
            }
        ?>
    </div>
</body>
</html>