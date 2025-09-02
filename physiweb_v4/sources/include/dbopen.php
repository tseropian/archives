<?php
    $link = @mysqli_connect("localhost", "root", "stevenadams", "ploplo");
    if (!$link) {
        $link = @mysqli_connect("db104.unetun.com", "dbo144262746", "", "db144262746");
        if (!$link) {
            echo "<br><br>Cette partie du site fait appel à une base de données. La connexion à celle-ci a échoué... désolé.<br><br>";
        }
    }
?>
