<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $currentLanguage = 'fr';
    if(isset($_GET['page'])) 
    {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) 
    {
        $currentLanguage = $_GET['lang'];
    }

    renderMenuToHTML($currentPageId,$currentLanguage);
?>  
<section>
    <?php
        $pageToInclude = $currentLanguage."/".$currentPageId . ".php"; 
        if(is_readable($pageToInclude))
        {
            require_once($pageToInclude);
        }
        else
        {
            require_once("error.php");
        }
    ?>  
</section>
<?php
    require_once("template_footer.php");
?>







