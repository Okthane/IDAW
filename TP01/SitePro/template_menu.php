<nav class="menu">
        <nav class="item_menu"><a href="index.php">Accueil</a></nav>
        <nav class="item_menu"><a href="CV.php">CV</a></nav>
        <nav class="item_menu"><a href="hobbies.php">Hobbies</a></nav>
        <nav class="item_menu"><a href="projets.php">Mes projets</a></nav>
    </nav>

<?php
    function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
        $mymenu = array(
// idPage titre
            'index' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets')
        );
// ...
        foreach($mymenu as $pageId => $pageParameters) {
            echo "...";
        }
// ...
    }
?>