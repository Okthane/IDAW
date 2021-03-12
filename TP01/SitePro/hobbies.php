<?php
require_once('template_header.php');
?>
...
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <title>Pierre Marque - Hobbies</title>
</head>
<header>
    <h1>HOBBIES</h1>
    <p> Voci quelques choses qui me définissent en dehors <br> de ma vie professionelle.</p>
</header>
<body class="body">
    <nav class="menu">
        <nav class="item_menu"><a href="index.php">Accueil</a></nav>
        <nav class="item_menu"><a href="CV.php">CV</a></nav>
        <nav class="currentpage"><a href="hobbies.php">Hobbies</a></nav>
    </nav>
    <article>
        <h2> Lectures, films & Sports</h2>
        <section>
            <h3>Sports pratiqués</h3>
            <ul>
                <li>Football</li>
                <li>Tennis</li>
                <li>Volleyball (très peu)</li>
            </ul>
        </section>
        <section>
            <h3> Livres et films préférées </h3>
            <ul>
                <li> <cite>Les Robots</cite> - Isaac Asimov</li>
                <li> <cite>Cyrano de Bergerac</cite> - Edmond Rostand</li>
                <li> <cite>Tinker, Tailor, Soldier, Spy - </cite>John le Carré</li>
                <br>
                <li> <cite>Ran</cite> - Akira Kurosawa</li>
                <li> <cite>Le Jour Attendra</cite> - Olivier Marshall</li>
                <li> <cite>North by Norwest</cite> - Alfred Hitchcock</li>
            </ul>
        </section>
    </article>
        <?php
            require_once("template_footer.php");
        ?>
</body>
</html>

