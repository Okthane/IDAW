<?php
    $mysql = mysqli_connect("localhost","root","","bdd_test");
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $dob = $_POST['dob'];
    //$choix = $_POST['choix'];
    $sql = "INSERT INTO utilisateurs (nom, mail, commentaire, anniversaire) VALUES ('{$fullName}','{$email}','{$comment}','{$choix}','{$dob}')";
    $mysql->query($sql);
?>                                                                              