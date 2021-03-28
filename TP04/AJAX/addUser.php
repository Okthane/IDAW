<?php
    $mysql = mysqli_connect("localhost","root","","bdd_test");

    if($mysql == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['inputNom'] )){
        $nom = $_POST['inputNom'];
    }
    if(isset($_POST['inputAddress'] )){
        $mail = $_POST['inputAddress'];
    }
    if(isset($_POST['inputCom'] )){
        $commentaire = $_POST['inputCom'];
    }
    $sql = "INSERT INTO utilisateurs (nom,mail,commentaire,PLS) VALUES ('${nom}','${mail}','${commentaire}','oui')";
    if(mysqli_query($mysql, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysql);
    }
    
    /*$fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $dob = $_POST['dob'];
    //$choix = $_POST['choix'];
    $sql = "INSERT INTO utilisateurs (nom, mail, commentaire, anniversaire) VALUES ('{$fullName}','{$email}','{$comment}','{$dob}')";
    $mysql->query($sql);*/
    mysqli_close($mysql);
?>                                                                              