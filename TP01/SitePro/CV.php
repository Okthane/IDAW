
<?php
require_once('template_header.php');
?>
...
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <title> Curriculum Vitae</title>
</head>
<body class="body">
    <header>
        <h1>CV </h1>
        <p>
            Trouvez ici le CV d'un jeune étudiant polyvalent, motivé, et dynamique<br>
        </p>
    </header>
    <nav class="menu">
        <nav class = "item_menu"><a href="index.php">Accueil</a></nav>
        <nav class="currentpage"><a href="CV.php">CV</a></nav>
        <nav class="item_menu"><a href="hobbies.php">Hobbies</a></nav>
    </nav>
    <div class="infos">
        <ul>
            <p>pierre.marque@etu.imt-lille-douai.fr</p>
            <p>+33 6 40 75 05 94</li>
            <p>263 rue du Grand Bail, Douai 59500</p>
        </ul>
    </div>
    <article>
        <header>
            <p>Un petit aperçu</p>
            <section>
              <img src="Capture.JPG" alt="Beau gosse non ?">  
            </section>
        </header>
    </article>
    <?php
        require_once("template_footer.php");
    ?>
</body>
</html>