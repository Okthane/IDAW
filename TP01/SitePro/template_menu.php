<?php
    function renderMenuToHTML($currentPageId) 
    {
// un tableau qui d\'efinit la structure du site
        $mymenu = array(
// idPage titre
            'index' => array('Accueil'),
            'CV' => array('CV'),
            'hobbies' => array('Hobbies'),
            'projets' => array('Mes Projets')
        );
        echo "<nav class ='menu'>";
        foreach($mymenu as $pageId => $pageParameters) 
        {
            if($pageId  != $currentPageId)
            {
                echo "<nav class='item_menu'><a href='$pageId.php'> $pageParameters[0]</a></nav>";
            }
            else 
            {
                echo "<nav class='currentpage'><a href='$pageId.php'> $pageParameters[0]</a></nav>";
            }
        }
        echo "</nav>";
    }
?>