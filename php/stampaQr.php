
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StampaQr</title>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
  
  <?php
    
    // Genera il codice JavaScript per creare una lista di elementi
    $codiceJavaScript = "var listaElementi = [";
    foreach ($libri_selezionati as $elemento) {
      $codiceJavaScript .= "'$elemento',";
    }
    $codiceJavaScript .= "];";
    
    // Esegui il codice JavaScript nella tua pagina HTML utilizzando una variabile JavaScript
    echo "<script>$codiceJavaScript</script>";
    ?>
    <script>
        listaElementi.forEach(function(id) {
            var content = 'http://libreria.netsons.org/php/loginQr.php?id=' + id;
            var finalURL =
                'https://chart.googleapis.com/chart?cht=qr&chl=' +
                encodeURIComponent(content) +
                '&chs=160x160&chld=L|0';
            $.ajax({
                url: "qrcodeGenerator.php",
                method: "POST",
                data: { url: finalURL, id : id },
                success: function(response) {
                    var paragraph = document.createElement("p");
                    paragraph.textContent = id;
                    document.body.appendChild(paragraph);
                }
            
            });
        });
    
    </script>
    <?php
    echo '<script>setTimeout(function() { window.location.href = "nuovoQr.php"; }, 500);</script>';
    ?>
  
  
</body>
</html>
