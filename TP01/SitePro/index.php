<?php
require_once('template_header.php');
?>

    <title> Pierre Marque, élève-ingénieur</title>
</head>
<body class="body">
    <?php
        //echo date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
        echo date('l j F Y, H:i');// Thursday 11 October 2012, 15:35
        //echo date('d F Y');        // 11 October 2012
        //echo date('d/m/Y');        // 11/10/12
    ?>
    <header>
        <h1>Pierre Marque, élève-ingénieur </h1>
        <p>
            Actuellement en deuxième année à l'IMT Lille-Douai,<br>
            je suis à la recherche d'un stage élève ingénieur de seize semines <br>
            démarrant au plus tôt le 12 avril.
        </p>
        
    </header>
    <nav class="menu">
        <nav class="currentpage"><a href="index.php">Accueil</a></nav>
        <nav class="item_menu"><a href="CV.php">CV</a></nav>
        <nav class="item_menu"><a href="hobbies.php">Hobbies</a></nav>
    </nav>
    <?php
         require_once("template_footer.php");
    ?>
</body>
</html>
