<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body id="bg">
    <section>
        <div class="form-box"  style="height:600px">
            <div class="form-value">
                <form action="./registrazioneCheck.php" method="POST">
                    <h2>Registrazione</h2>
                    <div class="inputbox">
                        <ion-icon name="body-outline"></ion-icon>
                        <input type="text" name="nome" required>
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="body-outline"></ion-icon>
                        <input type="text" name="cognome" required>
                        <label for="">Cognome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="book-outline"></ion-icon>
                        <input type="text" name="classe" required>
                        <label for="">Classe</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Registrati</button>
                </form>
            </div>
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>