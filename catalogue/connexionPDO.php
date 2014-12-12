<?php
    function connexionPDO($requete)
    {
        // Paramètres de connexion
        $driver = 'sqlsrv';
        $host = 'INFO-SIMPLET';
        $nomDb = 'Classique';
        $user = 'ETD';
        $password = 'ETD';
        // Chaîne de connexion
        $pdodsn = "$driver:Server=$host;Database=$nomDb";
        // Connexion PDO
        $pdo = new PDO($pdodsn, $user, $password);
        foreach ($pdo->query($requete) as $row) {
            echo 'Nom : ' . $row['Nom_Musicien']. "<br>";
        }
        $pdo = null;
    }
?>