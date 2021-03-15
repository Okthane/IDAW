<?php
    function renderMenuToHTML($currentPageId,$currentLaguage) 
    {
// un tableau qui d\'efinit la structure du site
        $langues = array('fr' => 0,'en'=> 1);$langueID = $langues[$currentLaguage];
        $mymenu = array(
// idPage titre
            'accueil' => array('Accueil','Home Menu'),
            'CV' => array('CV','Curriculum Vitae'),
            'hobbies' => array('Centres d\'intérêt','Hobbies'),
            'projets' => array('Mes Projets', 'My Projects'),
            'contact' => array('Contact','How reach me ?')
        );
        echo "<nav class ='menu'>";
        foreach($mymenu as $pageId => $pageParameters) 
        {
            if($pageId  != $currentPageId)
            {
                echo "<nav class='item_menu'><a href='index.php?page=$pageId&lang=$currentLaguage'> $pageParameters[$langueID] </a></nav>";
            }
            else 
            {
                echo "<nav class='currentpage'><a href='index.php?page=$pageId&lang=$currentLaguage'> $pageParameters[$langueID] </a></nav>";
            }
        }
        echo "</nav>";
            echo "<nav class='item_menu_lang'><a href='index.php?page=$currentPageId&lang=fr'> Français </a></nav>";
            echo "<nav class='item_menu_lang'><a href='index.php?page=$currentPageId&lang=en'> English </a></nav>";
        echo "</nav>";

    }
?>