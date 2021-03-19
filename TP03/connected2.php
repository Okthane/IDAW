<?php
    $serveurBD = "localhost";
    $nomUtilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "bdd_test";
   
    mysql_connect($serveurBD,
                  $nomUtilisateur,
                  $motDePasse);

    $connexionReussie = mysql_select_db($baseDeDonnees);
   
    // Et pour mettre fin à la connexion
    mysql_close();
?>