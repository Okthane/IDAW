<?php
    function renderMenuToHTML($currentPageId,$currentLaguage,$style) 
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
        if ($currentPageId != 'login')
        {
            foreach($mymenu as $pageId => $pageParameters) 
            {
                if($pageId  != $currentPageId)
                {
                    echo "<nav class='item_menu'><a href='index.php?page=$pageId&lang=$currentLaguage&css=$style'> $pageParameters[$langueID] </a></nav>";
                }
                else 
                {
                    echo "<nav class='currentpage'><a href='index.php?page=$pageId&lang=$currentLaguage&css=$style'> $pageParameters[$langueID] </a></nav>";
                }
            }
        }
        echo "</nav>";
        echo "<nav>";
            echo "<nav class='item_menu_lang'><a href='index.php?page=$currentPageId&lang=fr&css=$style'> Français </a></nav>";
            echo "<nav class='item_menu_lang'><a href='index.php?page=$currentPageId&lang=en&css=$style'> English </a></nav>";
        echo "</nav>";

    }
?>