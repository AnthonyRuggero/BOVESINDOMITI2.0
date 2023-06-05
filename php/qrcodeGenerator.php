<?php
    $phpURL = $_POST['url'];
    $id = $_POST['id'];
    $qrCodeImage = "../img/qrcode".$id.".png";
    file_put_contents($qrCodeImage,file_get_contents($phpURL));
    echo "Fatto";
?>