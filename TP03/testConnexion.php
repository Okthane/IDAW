<?php
    $conn = mysqli_connect("localhost", "root", "" , "bdd_test");
    $sql="SELECT * FROM dieux";
    $result = $conn->query($sql);

    echo"<table>";
    while($data=mysqli_fetch_array($result)){
        echo "<tr><td>".$data['id']."</td><td>".$data['login']."</td><td>".$data['pseudo']."</td></tr>";
    }
    echo"</table>";
?>
