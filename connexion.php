<?php
    try {
        $base= new PDO("mysql:host=localhost;dbname=projet_Hup", "root", "root");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>